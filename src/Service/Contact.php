<?php

namespace TheBrain\Service;

Class Contact {

    protected $client;

    public function __construct(\TheBrain\ApiClient $client){
        $this->client = $client;
    }

    public function all($base_id, $query = []){
        $url = "/base/" . $base_id . "/contact";
        $response = $this->client->call("get", $url, $query);
        return $response;
    }

    public function get($base_id, $contact_id){
        $url = "/base/" . $base_id . "/contact/" . $contact_id;
        $response = $this->client->call("get", $url);
        return $response;
    }

    public function store($base_id, $query = []){
        $url = "/base/" . $base_id . "/contact";
        $response = $this->client->call("post", $url, $query);
        return $response;
    }

    public function update($base_id, $contact_id, $query = []){
        $url = "/base/" . $base_id . "/contact/" . $contact_id;
        $response = $this->client->call("put", $url, $query);
        return $response;
    }

    public function delete($base_id, $contact_id){
        $url = "/base/" . $base_id . "/contact/" . $contact_id;
        $response = $this->client->call("delete", $url);
        return $response;
    }

}