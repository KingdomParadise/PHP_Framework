<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Api\V2010\Account\Conference;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class RecordingTest extends HolodeckTestCase {
    public function testUpdateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->recordings("REXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update("in-progress");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = array('Status' => "in-progress", );

        $this->assertRequest(new Request(
            'post',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Conferences/CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Recordings/REXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX.json',
            null,
            $values
        ));
    }

    public function testUpdateResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "api_version": "2010-04-01",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "channels": 1,
                "date_created": "Fri, 14 Oct 2016 21:56:34 +0000",
                "date_updated": "Fri, 14 Oct 2016 21:56:39 +0000",
                "start_time": "Fri, 14 Oct 2016 21:56:34 +0000",
                "price": null,
                "price_unit": null,
                "duration": null,
                "sid": "REaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "source": "StartConferenceRecordingAPI",
                "status": "paused",
                "error_code": null,
                "encryption_details": null,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings/REaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->recordings("REXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->update("in-progress");

        $this->assertNotNull($actual);
    }

    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->recordings("REXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Conferences/CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Recordings/REXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX.json'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "api_version": "2010-04-01",
                "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "channels": "1",
                "date_created": "Fri, 14 Oct 2016 21:56:34 +0000",
                "date_updated": "Fri, 14 Oct 2016 21:56:38 +0000",
                "start_time": "Fri, 14 Oct 2016 21:56:34 +0000",
                "price": "-0.0025",
                "price_unit": "USD",
                "duration": "4",
                "sid": "REaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "source": "StartConferenceRecordingAPI",
                "status": "completed",
                "error_code": null,
                "encryption_details": {
                    "encryption_public_key_sid": "CRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    "encryption_cek": "OV4h6zrsxMIW7h0Zfqwfn6TI2GCNl54KALlg8wn8YB8KYZhXt6HlgvBWAmQTlfYVeLWydMiCewY0YkDDT1xmNe5huEo9vjuKBS5OmYK4CZkSx1NVv3XOGrZHpd2Pl/5WJHVhUK//AUO87uh5qnUP2E0KoLh1nyCLeGcEkXU0RfpPn/6nxjof/n6m6OzZOyeIRK4Oed5+rEtjqFDfqT0EVKjs6JAxv+f0DCc1xYRHl2yV8bahUPVKs+bHYdy4PVszFKa76M/Uae4jFA9Lv233JqWcxj+K2UoghuGhAFbV/JQIIswY2CBYI8JlVSifSqNEl9vvsTJ8bkVMm3MKbG2P7Q==",
                    "encryption_iv": "8I2hhNIYNTrwxfHk"
                },
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings/REaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.json"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->recordings("REXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->recordings("REXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Conferences/CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Recordings/REXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX.json'
        ));
    }

    public function testDeleteResponse() {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->recordings("REXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }

    public function testReadRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->recordings->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://api.twilio.com/2010-04-01/Accounts/ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Conferences/CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Recordings.json'
        ));
    }

    public function testReadFullResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "end": 0,
                "first_page_uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings.json?PageSize=50&Page=0",
                "next_page_uri": null,
                "page": 0,
                "page_size": 50,
                "previous_page_uri": null,
                "recordings": [
                    {
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "api_version": "2010-04-01",
                        "call_sid": "CAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "conference_sid": "CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "channels": "1",
                        "date_created": "Fri, 14 Oct 2016 21:56:34 +0000",
                        "date_updated": "Fri, 14 Oct 2016 21:56:38 +0000",
                        "start_time": "Fri, 14 Oct 2016 21:56:34 +0000",
                        "price": "-0.0025",
                        "price_unit": "USD",
                        "duration": "4",
                        "sid": "REaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "source": "StartConferenceRecordingAPI",
                        "status": "completed",
                        "error_code": null,
                        "encryption_details": {
                            "encryption_public_key_sid": "CRaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                            "encryption_cek": "OV4h6zrsxMIW7h0Zfqwfn6TI2GCNl54KALlg8wn8YB8KYZhXt6HlgvBWAmQTlfYVeLWydMiCewY0YkDDT1xmNe5huEo9vjuKBS5OmYK4CZkSx1NVv3XOGrZHpd2Pl/5WJHVhUK//AUO87uh5qnUP2E0KoLh1nyCLeGcEkXU0RfpPn/6nxjof/n6m6OzZOyeIRK4Oed5+rEtjqFDfqT0EVKjs6JAxv+f0DCc1xYRHl2yV8bahUPVKs+bHYdy4PVszFKa76M/Uae4jFA9Lv233JqWcxj+K2UoghuGhAFbV/JQIIswY2CBYI8JlVSifSqNEl9vvsTJ8bkVMm3MKbG2P7Q==",
                            "encryption_iv": "8I2hhNIYNTrwxfHk"
                        },
                        "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings.json"
                    }
                ],
                "start": 0,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings.json?PageSize=50&Page=0"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->recordings->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testReadEmptyResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "end": 0,
                "first_page_uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings.json?PageSize=50&Page=0",
                "next_page_uri": null,
                "page": 0,
                "page_size": 50,
                "previous_page_uri": null,
                "recordings": [],
                "start": 0,
                "uri": "/2010-04-01/Accounts/ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Conferences/CFaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Recordings.json?PageSize=50&Page=0"
            }
            '
        ));

        $actual = $this->twilio->api->v2010->accounts("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->conferences("CFXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->recordings->read();

        $this->assertNotNull($actual);
    }
}