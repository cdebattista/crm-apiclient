<?php

namespace Crm\Service;

Class Source {

    protected $client;

    public function __construct(\Crm\ApiClient $client){
        $this->client = $client;
    }

    public function all($base_id, $query = []){
        $url = "/base/" . $base_id . "/source";
        $response = $this->client->call("get", $url, $query);
        return $response;
    }

    public function get($base_id, $source_id){
        $url = "/base/" . $base_id . "/source/" . $source_id;
        $response = $this->client->call("get", $url);
        return $response;
    }

    public function getByLabel($base_id, $label){
        $url = "/base/" . $base_id . "/source/label/" . $label;
        $response = $this->client->call("get", $url);
        return $response;
    }

    public function store($base_id, $query = []){
        $url = "/base/" . $base_id . "/source";
        $response = $this->client->call("post", $url, $query);
        return $response;
    }

    public function update($base_id, $source_id, $query = []){
        $url = "/base/" . $base_id . "/source/" . $source_id;
        $response = $this->client->call("put", $url, $query);
        return $response;
    }

    public function delete($base_id, $source_id){
        $url = "/base/" . $base_id . "/source/" . $source_id;
        $response = $this->client->call("delete", $url);
        return $response;
    }

}