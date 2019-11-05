<?php
use PHPUnit\Framework\TestCase;
use Crm\ApiClient;
use Crm\Service\Marketing;


final class MarketingTest extends TestCase
{
    public function testAll()
    {
        $api = new ApiClient();
        $api->setToken("eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA1MWQyNzEyMGY1N2EyZGVlZjk0ZTE5NDQ1N2U2ZWFiZWExNTVmOTkxMDgzNjZhMjFmM2NiOTJlZmYwNmE0MTI3OTVmZjcyZWI2NTg2NzAyIn0.eyJhdWQiOiIyIiwianRpIjoiMDUxZDI3MTIwZjU3YTJkZWVmOTRlMTk0NDU3ZTZlYWJlYTE1NWY5OTEwODM2NmEyMWYzY2I5MmVmZjA2YTQxMjc5NWZmNzJlYjY1ODY3MDIiLCJpYXQiOjE1NjM3ODc2MzIsIm5iZiI6MTU2Mzc4NzYzMiwiZXhwIjo0NzE5NDYxMjMxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QikrlnnF3S_xzeFSvXwQrP14TPAukGI8neYhWAq__19JJhI3SiUAgAKUACDa4u9AaBTFqKyAd0zFG7Qebs6GfCoHQ-HVRinfJ7MgpAcWIG94qe51VkWstQnG1QPqWNWS2KaeybjALt1Fl7b0ze7-JN1eVfxQVTA7NErSd6GgWCaImPhfJ7bFdUyR4ID9FLlIRrYP5GEA-FaFKOQlgzIG4PqgQH_75bE12oMNjqfyuKH8cgbX5D_SmFRF-GklB4xvSmqckwJztiQU9TBftZ5Hyc6DZagjbntODzbxi-NeECLfrKJvaVCxd0MJPVOXwYt4VGo3xD3-ufw6MOBIxrVM0hoSQqBKlmyh7hdBBQ_4vZ_GcT41_Rd_6rxFWPmdyaTxTiv5jQQNin8Pi6Er_oEWLTnBUY3zMk0mrJCi75oBz3lKa_rg_2TjiWB5fSW9WaT_aT5RiuQERxccqPsjngannzBLrbHhMMeE5bS-MczwS7BpHcGviOSWI1WSBJfFfALsZH0A9RFUuunbMPDgVR02wdWuAC-XfG4I4xg9IgcOnAqmintrMaYtLWsQmwg3QgaMnEo0FFGvqLzadk8N0FFTpI70TfSewYX1Uywax0XcZB86LPs6v5M_GQiKVmWOteQFz9KavvkS4bEVl_sWOKuYC5m1VHMYKTBD0MDQtTSwZ5Q", "");
        $api->setApiUrl('https://preprod.fboard.app/crm/api');

        $marketings = new Marketing($api);
        $marketings = $marketings->all(23);
        //echo json_encode($marketings, JSON_PRETTY_PRINT);
    }

    public function testGet()
    {
        $api = new ApiClient();
        $api->setToken("eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA1MWQyNzEyMGY1N2EyZGVlZjk0ZTE5NDQ1N2U2ZWFiZWExNTVmOTkxMDgzNjZhMjFmM2NiOTJlZmYwNmE0MTI3OTVmZjcyZWI2NTg2NzAyIn0.eyJhdWQiOiIyIiwianRpIjoiMDUxZDI3MTIwZjU3YTJkZWVmOTRlMTk0NDU3ZTZlYWJlYTE1NWY5OTEwODM2NmEyMWYzY2I5MmVmZjA2YTQxMjc5NWZmNzJlYjY1ODY3MDIiLCJpYXQiOjE1NjM3ODc2MzIsIm5iZiI6MTU2Mzc4NzYzMiwiZXhwIjo0NzE5NDYxMjMxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QikrlnnF3S_xzeFSvXwQrP14TPAukGI8neYhWAq__19JJhI3SiUAgAKUACDa4u9AaBTFqKyAd0zFG7Qebs6GfCoHQ-HVRinfJ7MgpAcWIG94qe51VkWstQnG1QPqWNWS2KaeybjALt1Fl7b0ze7-JN1eVfxQVTA7NErSd6GgWCaImPhfJ7bFdUyR4ID9FLlIRrYP5GEA-FaFKOQlgzIG4PqgQH_75bE12oMNjqfyuKH8cgbX5D_SmFRF-GklB4xvSmqckwJztiQU9TBftZ5Hyc6DZagjbntODzbxi-NeECLfrKJvaVCxd0MJPVOXwYt4VGo3xD3-ufw6MOBIxrVM0hoSQqBKlmyh7hdBBQ_4vZ_GcT41_Rd_6rxFWPmdyaTxTiv5jQQNin8Pi6Er_oEWLTnBUY3zMk0mrJCi75oBz3lKa_rg_2TjiWB5fSW9WaT_aT5RiuQERxccqPsjngannzBLrbHhMMeE5bS-MczwS7BpHcGviOSWI1WSBJfFfALsZH0A9RFUuunbMPDgVR02wdWuAC-XfG4I4xg9IgcOnAqmintrMaYtLWsQmwg3QgaMnEo0FFGvqLzadk8N0FFTpI70TfSewYX1Uywax0XcZB86LPs6v5M_GQiKVmWOteQFz9KavvkS4bEVl_sWOKuYC5m1VHMYKTBD0MDQtTSwZ5Q", "");
        $api->setApiUrl('https://preprod.fboard.app/crm/api');

        $marketings = new Marketing($api);
        $marketings = $marketings->get(23, 1);
        //echo json_encode($marketings, JSON_PRETTY_PRINT);
    }

    public function testGetByLabel()
    {
        $api = new ApiClient();
        $api->setToken("eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA1MWQyNzEyMGY1N2EyZGVlZjk0ZTE5NDQ1N2U2ZWFiZWExNTVmOTkxMDgzNjZhMjFmM2NiOTJlZmYwNmE0MTI3OTVmZjcyZWI2NTg2NzAyIn0.eyJhdWQiOiIyIiwianRpIjoiMDUxZDI3MTIwZjU3YTJkZWVmOTRlMTk0NDU3ZTZlYWJlYTE1NWY5OTEwODM2NmEyMWYzY2I5MmVmZjA2YTQxMjc5NWZmNzJlYjY1ODY3MDIiLCJpYXQiOjE1NjM3ODc2MzIsIm5iZiI6MTU2Mzc4NzYzMiwiZXhwIjo0NzE5NDYxMjMxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QikrlnnF3S_xzeFSvXwQrP14TPAukGI8neYhWAq__19JJhI3SiUAgAKUACDa4u9AaBTFqKyAd0zFG7Qebs6GfCoHQ-HVRinfJ7MgpAcWIG94qe51VkWstQnG1QPqWNWS2KaeybjALt1Fl7b0ze7-JN1eVfxQVTA7NErSd6GgWCaImPhfJ7bFdUyR4ID9FLlIRrYP5GEA-FaFKOQlgzIG4PqgQH_75bE12oMNjqfyuKH8cgbX5D_SmFRF-GklB4xvSmqckwJztiQU9TBftZ5Hyc6DZagjbntODzbxi-NeECLfrKJvaVCxd0MJPVOXwYt4VGo3xD3-ufw6MOBIxrVM0hoSQqBKlmyh7hdBBQ_4vZ_GcT41_Rd_6rxFWPmdyaTxTiv5jQQNin8Pi6Er_oEWLTnBUY3zMk0mrJCi75oBz3lKa_rg_2TjiWB5fSW9WaT_aT5RiuQERxccqPsjngannzBLrbHhMMeE5bS-MczwS7BpHcGviOSWI1WSBJfFfALsZH0A9RFUuunbMPDgVR02wdWuAC-XfG4I4xg9IgcOnAqmintrMaYtLWsQmwg3QgaMnEo0FFGvqLzadk8N0FFTpI70TfSewYX1Uywax0XcZB86LPs6v5M_GQiKVmWOteQFz9KavvkS4bEVl_sWOKuYC5m1VHMYKTBD0MDQtTSwZ5Q", "");
        $api->setApiUrl('https://preprod.fboard.app/crm/api');

        $marketings = new Marketing($api);
        $marketings = $marketings->getByLabel(23, 'Facebook');
        //echo json_encode($marketings, JSON_PRETTY_PRINT);
    }

    public function testStore()
    {
        $api = new ApiClient();
        $api->setToken("eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA1MWQyNzEyMGY1N2EyZGVlZjk0ZTE5NDQ1N2U2ZWFiZWExNTVmOTkxMDgzNjZhMjFmM2NiOTJlZmYwNmE0MTI3OTVmZjcyZWI2NTg2NzAyIn0.eyJhdWQiOiIyIiwianRpIjoiMDUxZDI3MTIwZjU3YTJkZWVmOTRlMTk0NDU3ZTZlYWJlYTE1NWY5OTEwODM2NmEyMWYzY2I5MmVmZjA2YTQxMjc5NWZmNzJlYjY1ODY3MDIiLCJpYXQiOjE1NjM3ODc2MzIsIm5iZiI6MTU2Mzc4NzYzMiwiZXhwIjo0NzE5NDYxMjMxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QikrlnnF3S_xzeFSvXwQrP14TPAukGI8neYhWAq__19JJhI3SiUAgAKUACDa4u9AaBTFqKyAd0zFG7Qebs6GfCoHQ-HVRinfJ7MgpAcWIG94qe51VkWstQnG1QPqWNWS2KaeybjALt1Fl7b0ze7-JN1eVfxQVTA7NErSd6GgWCaImPhfJ7bFdUyR4ID9FLlIRrYP5GEA-FaFKOQlgzIG4PqgQH_75bE12oMNjqfyuKH8cgbX5D_SmFRF-GklB4xvSmqckwJztiQU9TBftZ5Hyc6DZagjbntODzbxi-NeECLfrKJvaVCxd0MJPVOXwYt4VGo3xD3-ufw6MOBIxrVM0hoSQqBKlmyh7hdBBQ_4vZ_GcT41_Rd_6rxFWPmdyaTxTiv5jQQNin8Pi6Er_oEWLTnBUY3zMk0mrJCi75oBz3lKa_rg_2TjiWB5fSW9WaT_aT5RiuQERxccqPsjngannzBLrbHhMMeE5bS-MczwS7BpHcGviOSWI1WSBJfFfALsZH0A9RFUuunbMPDgVR02wdWuAC-XfG4I4xg9IgcOnAqmintrMaYtLWsQmwg3QgaMnEo0FFGvqLzadk8N0FFTpI70TfSewYX1Uywax0XcZB86LPs6v5M_GQiKVmWOteQFz9KavvkS4bEVl_sWOKuYC5m1VHMYKTBD0MDQtTSwZ5Q", "");
        $api->setApiUrl('https://preprod.fboard.app/crm/api');

        $marketings = new Marketing($api);
        $marketings = $marketings->store(23, [
            'label' => 'Test',
            'color' => '#eee444'
        ]);
        //echo json_encode($marketings, JSON_PRETTY_PRINT);
    }

    public function testUpdate()
    {
        $api = new ApiClient();
        $api->setToken("eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA1MWQyNzEyMGY1N2EyZGVlZjk0ZTE5NDQ1N2U2ZWFiZWExNTVmOTkxMDgzNjZhMjFmM2NiOTJlZmYwNmE0MTI3OTVmZjcyZWI2NTg2NzAyIn0.eyJhdWQiOiIyIiwianRpIjoiMDUxZDI3MTIwZjU3YTJkZWVmOTRlMTk0NDU3ZTZlYWJlYTE1NWY5OTEwODM2NmEyMWYzY2I5MmVmZjA2YTQxMjc5NWZmNzJlYjY1ODY3MDIiLCJpYXQiOjE1NjM3ODc2MzIsIm5iZiI6MTU2Mzc4NzYzMiwiZXhwIjo0NzE5NDYxMjMxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QikrlnnF3S_xzeFSvXwQrP14TPAukGI8neYhWAq__19JJhI3SiUAgAKUACDa4u9AaBTFqKyAd0zFG7Qebs6GfCoHQ-HVRinfJ7MgpAcWIG94qe51VkWstQnG1QPqWNWS2KaeybjALt1Fl7b0ze7-JN1eVfxQVTA7NErSd6GgWCaImPhfJ7bFdUyR4ID9FLlIRrYP5GEA-FaFKOQlgzIG4PqgQH_75bE12oMNjqfyuKH8cgbX5D_SmFRF-GklB4xvSmqckwJztiQU9TBftZ5Hyc6DZagjbntODzbxi-NeECLfrKJvaVCxd0MJPVOXwYt4VGo3xD3-ufw6MOBIxrVM0hoSQqBKlmyh7hdBBQ_4vZ_GcT41_Rd_6rxFWPmdyaTxTiv5jQQNin8Pi6Er_oEWLTnBUY3zMk0mrJCi75oBz3lKa_rg_2TjiWB5fSW9WaT_aT5RiuQERxccqPsjngannzBLrbHhMMeE5bS-MczwS7BpHcGviOSWI1WSBJfFfALsZH0A9RFUuunbMPDgVR02wdWuAC-XfG4I4xg9IgcOnAqmintrMaYtLWsQmwg3QgaMnEo0FFGvqLzadk8N0FFTpI70TfSewYX1Uywax0XcZB86LPs6v5M_GQiKVmWOteQFz9KavvkS4bEVl_sWOKuYC5m1VHMYKTBD0MDQtTSwZ5Q", "");
        $api->setApiUrl('https://preprod.fboard.app/crm/api');

        $marketings = new Marketing($api);
        $marketings = $marketings->update(23, 8, [
            'label' => 'Api Update',
            'color' => '#eee444'
        ]);
        //echo json_encode($marketings, JSON_PRETTY_PRINT);
    }
    public function testDelete()
    {
        $api = new ApiClient();
        $api->setToken("eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA1MWQyNzEyMGY1N2EyZGVlZjk0ZTE5NDQ1N2U2ZWFiZWExNTVmOTkxMDgzNjZhMjFmM2NiOTJlZmYwNmE0MTI3OTVmZjcyZWI2NTg2NzAyIn0.eyJhdWQiOiIyIiwianRpIjoiMDUxZDI3MTIwZjU3YTJkZWVmOTRlMTk0NDU3ZTZlYWJlYTE1NWY5OTEwODM2NmEyMWYzY2I5MmVmZjA2YTQxMjc5NWZmNzJlYjY1ODY3MDIiLCJpYXQiOjE1NjM3ODc2MzIsIm5iZiI6MTU2Mzc4NzYzMiwiZXhwIjo0NzE5NDYxMjMxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.QikrlnnF3S_xzeFSvXwQrP14TPAukGI8neYhWAq__19JJhI3SiUAgAKUACDa4u9AaBTFqKyAd0zFG7Qebs6GfCoHQ-HVRinfJ7MgpAcWIG94qe51VkWstQnG1QPqWNWS2KaeybjALt1Fl7b0ze7-JN1eVfxQVTA7NErSd6GgWCaImPhfJ7bFdUyR4ID9FLlIRrYP5GEA-FaFKOQlgzIG4PqgQH_75bE12oMNjqfyuKH8cgbX5D_SmFRF-GklB4xvSmqckwJztiQU9TBftZ5Hyc6DZagjbntODzbxi-NeECLfrKJvaVCxd0MJPVOXwYt4VGo3xD3-ufw6MOBIxrVM0hoSQqBKlmyh7hdBBQ_4vZ_GcT41_Rd_6rxFWPmdyaTxTiv5jQQNin8Pi6Er_oEWLTnBUY3zMk0mrJCi75oBz3lKa_rg_2TjiWB5fSW9WaT_aT5RiuQERxccqPsjngannzBLrbHhMMeE5bS-MczwS7BpHcGviOSWI1WSBJfFfALsZH0A9RFUuunbMPDgVR02wdWuAC-XfG4I4xg9IgcOnAqmintrMaYtLWsQmwg3QgaMnEo0FFGvqLzadk8N0FFTpI70TfSewYX1Uywax0XcZB86LPs6v5M_GQiKVmWOteQFz9KavvkS4bEVl_sWOKuYC5m1VHMYKTBD0MDQtTSwZ5Q", "");
        $api->setApiUrl('https://preprod.fboard.app/crm/api');

        $marketings = new Marketing($api);
        $marketings = $marketings->delete(23, 9);
        echo json_encode($marketings, JSON_PRETTY_PRINT);
    }
}