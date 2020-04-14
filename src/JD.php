<?php


namespace scpzc\JingdongAPI;


class JD
{
    public function test(){
        echo 1111;exit;
        $c = new JdClient();
        $c->appKey = "26EAC2509056EB38FB623D9A49296D2C";
        $c->appSecret = "1abdc5a97ecb4594ab7b772296bcfbbd";
        $c->accessToken = "1f1d3048-220a-484d-ad93-f3808d9aacc1";
        $c->serverUrl = "http://gw.api.360buy.net/routerjson";
        $req = new JingdongSetListMapRequest;
        $req->putOtherTextParam("cid", "1");
        $req->putOtherTextParam("value_id", "1");
        $req->putOtherTextParam("source", "1");
        $req->putOtherTextParam("ip", "1");
        $resp = $c->execute($req, $c->accessToken);
        print(json_encode($resp));
    }
}