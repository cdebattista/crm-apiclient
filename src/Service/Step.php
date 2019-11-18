<?php

namespace Crm\Service;

Class Step {

    protected $client;

    public function __construct(\Crm\ApiClient $client){
        $this->client = $client;
    }

    public function all($base_id, $query = []){
        $url = "/base/" . $base_id . "/step";
        $response = $this->client->call("get", $url, $query);
        return $response;
    }

    public function get($base_id, $step_id){
        $url = "/base/" . $base_id . "/step/" . $step_id;
        $response = $this->client->call("get", $url);
        return $response;
    }

    public function getByLabel($base_id, $label){
        $url = "/base/" . $base_id . "/step/label/" . $label;
        $response = $this->client->call("get", $url);
        return $response;
    }

    public function store($base_id, $query = []){
        $url = "/base/" . $base_id . "/step";
        $response = $this->client->call("post", $url, $query);
        return $response;
    }

    public function update($base_id, $step_id, $query = []){
        $url = "/base/" . $base_id . "/step/" . $step_id;
        $response = $this->client->call("put", $url, $query);
        return $response;
    }

    public function delete($base_id, $step_id){
        $url = "/base/" . $base_id . "/step/" . $step_id;
        $response = $this->client->call("delete", $url);
        return $response;
    }

}