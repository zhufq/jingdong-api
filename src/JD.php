<?php
/**
 * 京东接口包装.
 */

namespace hVenus\JingdongAPI;

use hVenus\JingdongAPI\API\ACCOUNT;
use hVenus\JingdongAPI\API\ADDRESS;
use hVenus\JingdongAPI\API\CATEGORY;
use hVenus\JingdongAPI\API\DSP;
use hVenus\JingdongAPI\API\ECLP;
use hVenus\JingdongAPI\API\EXPRESS;
use hVenus\JingdongAPI\API\Helper;
use hVenus\JingdongAPI\API\ORDER;
use hVenus\JingdongAPI\API\SHOP;
use hVenus\JingdongAPI\Core\BaseClass;

class JD extends BaseClass
{
    use Helper, ECLP, EXPRESS, ADDRESS, CATEGORY, DSP, SHOP, ORDER, ACCOUNT;

    /**
     * 获取各接口的具体地址
     * @param $method
     * @return mixed
     */
    private function getMethod($method) {
        $method = str_replace('.', '_', $method);
        if (mb_substr($method, 0, 3) == '360') {
            $method = '_'.$method;
        }
        return $this->$method();
    }

    /**
     * 获取系统参数
     * @param $method
     * @return array
     */
    private function getParams($method) {
        $p = [
            "method" => $method,
            'access_token' => $this->params['access_token'],
            'app_key' => $this->config['app_key'],
            'timestamp' => date('Y-m-d H:i:s'),
            'format' => $this->config['format'],
            'v' => $this->config['v']
        ];
        return $p;
    }

    /**
     * 调用京东接口
     * @param $method 接口地址
     * @param $param 参数
     * @return array|\GuzzleHttp\Stream\StreamInterface|mixed|null|string
     */
    private function call_jd_function($method, $param){
        // 获取系统参数
        $p = $this->getParams($method);

        // 获取应用参数
        if (is_array($param) && count($param)>0) {
            $p['360buy_param_json'] = json_encode($param);
        } else {
            // 无参数需要构造空字段
            $p['360buy_param_json'] = "{}";
        }

        // 签名
        $sign = $this->signit($p, $this->config['app_secret']);
        // 签名加入参数
        $p['sign'] = $sign;

        // 获取接口数据
        $result = $this->HttpGet($this->config['url'], $this->config['uri'], $p);
        var_dump($result);exit;
        return $result;
    }

    /**
     * 用于直接调用
     * @param $method
     * @param $param
     * @return array|\GuzzleHttp\Stream\StreamInterface|mixed|null|string
     */
    public function Call($method, $param) {
        return $this->call_jd_function($method, $param);
    }


    /**
     * 获取token第一步，返回取得code的URL
     * date: 2020-04-13 19:04
     *
     * @param $param
     *
     * @return string
     */
    public function getCodeUrl($param){
        return 'https://open-oauth.jd.com/oauth2/to_login?app_key='.$param['app_key'].'&response_type=code&redirect_uri='.$param['redirect_uri'].'&state=&scope=snsapi_base';
    }

    /**
     * 获取token第二步，拿到第一步的code再调一次接口获取token
     * date: 2020-04-13 19:05
     *
     * @param $param
     */
    public function getToken($param){
        $config = [
            'app_key'    => $param['app_key'],
            'app_secret' => $param['app_secret'],
            'grant_type' => 'authorization_code',
            'code'       => $param['code'],
        ];
        return $this->HttpGet('https://open-oauth.jd.com','oauth2/access_token',$config);
    }

    /**
     * 刷新京东的授权Token
     * @param $param
     * @return bool|mixed
     */
    public function RefreshToken($param) {
        $config = [
            'client_id'     => $param['app_key'],
            'client_secret' => $param['app_secret'],
            'grant_type'    => 'refresh_token',
            'refresh_token' => $param['refresh_token'],
            'scope'         => 'read',
        ];
        $result = $this->HttpPost('http://oauth.jd.com', 'oauth/token', $config);
        if ($result != '') {
            $data = json_decode($result);
            return $data;
        }
        return false;
    }

}