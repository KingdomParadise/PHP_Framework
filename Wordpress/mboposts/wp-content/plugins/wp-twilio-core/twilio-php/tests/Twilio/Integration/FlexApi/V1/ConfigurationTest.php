<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\FlexApi\V1;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class ConfigurationTest extends HolodeckTestCase {
    public function testFetchRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->flexApi->v1->configuration()->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://flex-api.twilio.com/v1/Configuration'
        ));
    }

    public function testFetchResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2016-08-01T22:10:40Z",
                "date_updated": "2016-08-01T22:10:40Z",
                "attributes": {
                    "main_attribute": "some_attribute"
                },
                "status": "ok",
                "taskrouter_workspace_sid": "WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "taskrouter_target_workflow_sid": "WWaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "taskrouter_target_taskqueue_sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "taskrouter_taskqueues": [
                    {
                        "sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab",
                        "targettable": true
                    },
                    {
                        "sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaac",
                        "targettable": false
                    }
                ],
                "taskrouter_skills": [
                    {
                        "name": "sales",
                        "multivalue": false,
                        "minimum": 0,
                        "maximum": 0
                    },
                    {
                        "name": "support",
                        "multivalue": true,
                        "minimum": 0,
                        "maximum": 10
                    }
                ],
                "taskrouter_worker_channels": {
                    "agent": [
                        {
                            "name": "default",
                            "availability": true,
                            "capacity": 1
                        },
                        {
                            "name": "voice",
                            "availability": false,
                            "capacity": 2
                        }
                    ],
                    "supervisor": [
                        {
                            "name": "default",
                            "availability": true,
                            "capacity": 2
                        }
                    ]
                },
                "taskrouter_worker_attributes": {
                    "agent": {
                        "region": "us-east"
                    },
                    "supervisor": {
                        "region": "us"
                    }
                },
                "taskrouter_offline_activity_sid": "WAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "runtime_domain": "https://flex.twilio.com",
                "messaging_service_instance_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "chat_service_instance_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "ui_language": "en",
                "ui_attributes": {},
                "ui_version": "1.0",
                "service_version": "1.0",
                "call_recording_enabled": true,
                "call_recording_webhook_url": "https://www.example.com/call-recording",
                "crm_enabled": true,
                "crm_type": "custom",
                "crm_callback_url": "https://crm.com/a",
                "crm_fallback_url": "https://crm.com/b",
                "crm_attributes": {
                    "crm_attribute": "some_crm"
                },
                "public_attributes": {
                    "public": "test"
                },
                "plugin_service_enabled": true,
                "plugin_service_attributes": {
                    "agent-logger": "^3.10.5",
                    "typewriter": "^7.0.1"
                },
                "integrations": [
                    {
                        "name": "twilio",
                        "type": "http",
                        "active": true,
                        "config": "{\\"callback\\":\\"twilio.com/cb\\",\\"allowed_methods\\":[\\"GET\\",\\"POST\\"]}",
                        "logo": "logo1",
                        "author": "somebody1"
                    },
                    {
                        "name": "twilio-stage",
                        "type": "http",
                        "active": false,
                        "config": "{\\"callback\\":\\"twilio.com/cb\\",\\"allowed_methods\\":[\\"GET\\",\\"POST\\"]}"
                    }
                ],
                "outbound_call_flows": {
                    "default": {
                        "caller_id": "+12345",
                        "queue_sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "location": "EE",
                        "workflow_sid": "WWaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                },
                "serverless_service_sids": [
                    "ZSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    "ZSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab"
                ],
                "url": "https://flex-api.twilio.com/v1/Configuration"
            }
            '
        ));

        $actual = $this->twilio->flexApi->v1->configuration()->fetch();

        $this->assertNotNull($actual);
    }

    public function testCreateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->flexApi->v1->configuration()->create();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://flex-api.twilio.com/v1/Configuration'
        ));
    }

    public function testCreateResponse() {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2016-08-01T22:10:40Z",
                "date_updated": "2016-08-01T22:10:40Z",
                "attributes": {
                    "main_attribute": "some_attribute"
                },
                "status": "ok",
                "taskrouter_workspace_sid": "WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "taskrouter_target_workflow_sid": "WWaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "taskrouter_target_taskqueue_sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "taskrouter_taskqueues": [
                    {
                        "sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab",
                        "targettable": true
                    },
                    {
                        "sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaac",
                        "targettable": false
                    }
                ],
                "taskrouter_skills": [
                    {
                        "name": "sales",
                        "multivalue": false,
                        "minimum": 0,
                        "maximum": 0
                    },
                    {
                        "name": "support",
                        "multivalue": true,
                        "minimum": 0,
                        "maximum": 10
                    }
                ],
                "taskrouter_worker_channels": {
                    "agent": [
                        {
                            "name": "default",
                            "availability": true,
                            "capacity": 1
                        },
                        {
                            "name": "voice",
                            "availability": false,
                            "capacity": 2
                        }
                    ],
                    "supervisor": [
                        {
                            "name": "default",
                            "availability": true,
                            "capacity": 2
                        }
                    ]
                },
                "taskrouter_worker_attributes": {
                    "agent": {
                        "region": "us-east"
                    },
                    "supervisor": {
                        "region": "us"
                    }
                },
                "taskrouter_offline_activity_sid": "WAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "runtime_domain": "https://flex.twilio.com",
                "messaging_service_instance_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "chat_service_instance_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "ui_language": "en",
                "ui_attributes": {},
                "ui_version": "1.0",
                "service_version": "1.0",
                "call_recording_enabled": true,
                "call_recording_webhook_url": "https://www.example.com/call-recording",
                "crm_enabled": true,
                "crm_type": "custom",
                "crm_callback_url": "https://crm.com/a",
                "crm_fallback_url": "https://crm.com/b",
                "crm_attributes": {
                    "crm_attribute": "some_crm"
                },
                "public_attributes": {
                    "public": "test"
                },
                "plugin_service_enabled": true,
                "plugin_service_attributes": {
                    "agent-logger": "^3.10.5",
                    "typewriter": "^7.0.1"
                },
                "integrations": [
                    {
                        "name": "twilio",
                        "type": "http",
                        "active": true,
                        "config": "{\\"callback\\":\\"twilio.com/cb\\",\\"allowed_methods\\":[\\"GET\\",\\"POST\\"]}",
                        "logo": "logo1",
                        "author": "somebody1"
                    },
                    {
                        "name": "twilio-stage",
                        "type": "http",
                        "active": false,
                        "config": "{\\"callback\\":\\"twilio.com/cb\\",\\"allowed_methods\\":[\\"GET\\",\\"POST\\"]}"
                    }
                ],
                "outbound_call_flows": {
                    "default": {
                        "caller_id": "+12345",
                        "queue_sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "location": "EE",
                        "workflow_sid": "WWaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                },
                "serverless_service_sids": [
                    "ZSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    "ZSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab"
                ],
                "url": "https://flex-api.twilio.com/v1/Configuration"
            }
            '
        ));

        $actual = $this->twilio->flexApi->v1->configuration()->create();

        $this->assertNotNull($actual);
    }

    public function testUpdateRequest() {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->flexApi->v1->configuration()->update();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'post',
            'https://flex-api.twilio.com/v1/Configuration'
        ));
    }

    public function testUpdateResponse() {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2016-08-01T22:10:40Z",
                "date_updated": "2016-08-01T22:10:40Z",
                "attributes": {
                    "main_attribute": "some_attribute"
                },
                "status": "ok",
                "taskrouter_workspace_sid": "WSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "taskrouter_target_workflow_sid": "WWaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "taskrouter_target_taskqueue_sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "taskrouter_taskqueues": [
                    {
                        "sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab",
                        "targettable": true
                    },
                    {
                        "sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaac",
                        "targettable": false
                    }
                ],
                "taskrouter_skills": [
                    {
                        "name": "sales",
                        "multivalue": false,
                        "minimum": 0,
                        "maximum": 0
                    },
                    {
                        "name": "support",
                        "multivalue": true,
                        "minimum": 0,
                        "maximum": 10
                    }
                ],
                "taskrouter_worker_channels": {
                    "agent": [
                        {
                            "name": "default",
                            "availability": true,
                            "capacity": 1
                        },
                        {
                            "name": "voice",
                            "availability": false,
                            "capacity": 2
                        }
                    ],
                    "supervisor": [
                        {
                            "name": "default",
                            "availability": true,
                            "capacity": 2
                        }
                    ]
                },
                "taskrouter_worker_attributes": {
                    "agent": {
                        "region": "us-east"
                    },
                    "supervisor": {
                        "region": "us"
                    }
                },
                "taskrouter_offline_activity_sid": "WAaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "runtime_domain": "https://flex.twilio.com",
                "messaging_service_instance_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "chat_service_instance_sid": "ISaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "ui_language": "en",
                "ui_attributes": {},
                "ui_version": "1.0",
                "service_version": "1.0",
                "call_recording_enabled": true,
                "call_recording_webhook_url": "https://www.example.com/call-recording",
                "crm_enabled": true,
                "crm_type": "custom",
                "crm_callback_url": "https://crm.com/a",
                "crm_fallback_url": "https://crm.com/b",
                "crm_attributes": {
                    "crm_attribute": "some_crm"
                },
                "public_attributes": {
                    "public": "test"
                },
                "plugin_service_enabled": false,
                "plugin_service_attributes": {
                    "agent-logger": "^3.10.5",
                    "typewriter": "^7.0.1"
                },
                "integrations": [
                    {
                        "name": "twilio",
                        "type": "http",
                        "active": true,
                        "config": "{\\"callback\\":\\"twilio.com/cb\\",\\"allowed_methods\\":[\\"GET\\",\\"POST\\"]}",
                        "logo": "logo1",
                        "author": "somebody1"
                    },
                    {
                        "name": "twilio-stage",
                        "type": "http",
                        "active": false,
                        "config": "{\\"callback\\":\\"twilio.com/cb\\",\\"allowed_methods\\":[\\"GET\\",\\"POST\\"]}"
                    }
                ],
                "outbound_call_flows": {
                    "default": {
                        "caller_id": "+12345",
                        "queue_sid": "WQaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "location": "EE",
                        "workflow_sid": "WWaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                },
                "serverless_service_sids": [
                    "ZSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    "ZSaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaab"
                ],
                "url": "https://flex-api.twilio.com/v1/Configuration"
            }
            '
        ));

        $actual = $this->twilio->flexApi->v1->configuration()->update();

        $this->assertNotNull($actual);
    }
}