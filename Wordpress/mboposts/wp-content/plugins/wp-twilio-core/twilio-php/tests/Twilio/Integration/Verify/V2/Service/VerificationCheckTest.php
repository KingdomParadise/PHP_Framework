<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Verify\V2\Service;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class VerificationCheckTest extends HolodeckTestCase {
    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->verify->v2->services("VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->verificationChecks->create("code");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = array('Code' => "code", );

        $this->assertRequest(new Request(
            'post',
            'https://verify.twilio.com/v2/Services/VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/VerificationCheck',
            null,
            $values
        ));
    }

    public function testVerificationChecksResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "VEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "to": "+15017122661",
                "channel": "sms",
                "status": "approved",
                "valid": true,
                "amount": null,
                "payee": null,
                "date_created": "2015-07-30T20:00:00Z",
                "date_updated": "2015-07-30T20:00:00Z"
            }
            '
        ));

        $actual = $this->twilio->verify->v2->services("VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->verificationChecks->create("code");

        $this->assertNotNull($actual);
    }

    public function testEmailVerificationChecksResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "VEaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "service_sid": "VAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "to": "recipient@foo.com",
                "channel": "email",
                "status": "approved",
                "valid": true,
                "amount": null,
                "payee": null,
                "date_created": "2020-01-30T20:00:00Z",
                "date_updated": "2020-01-30T20:00:00Z"
            }
            '
        ));

        $actual = $this->twilio->verify->v2->services("VAXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                           ->verificationChecks->create("code");

        $this->assertNotNull($actual);
    }
}