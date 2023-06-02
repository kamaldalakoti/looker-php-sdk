<?php
/**
 * ConfigApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Looker API 4.0 Reference
 *
 * API 4.0 is the current release of the Looker API. API 3.1 is deprecated.  ### Authorization  The classic method of API authorization uses Looker **API3** credentials for authorization and access control. Looker admins can create API3 credentials on Looker's **Admin/Users** page.  API 4.0 adds additional ways to authenticate API requests, including OAuth and CORS requests.  For details, see [Looker API Authorization](https://cloud.google.com/looker/docs/r/api/authorization).   ### API Explorer  The API Explorer is a Looker-provided utility with many new and unique features for learning and using the Looker API and SDKs.  For details, see the [API Explorer documentation](https://cloud.google.com/looker/docs/r/api/explorer).   ### Looker Language SDKs  The Looker API is a RESTful system that should be usable by any programming language capable of making HTTPS requests. SDKs for a variety of programming languages are also provided to streamline using the API. Looker has an OpenSource [sdk-codegen project](https://github.com/looker-open-source/sdk-codegen) that provides several language SDKs. Language SDKs generated by `sdk-codegen` have an Authentication manager that can automatically authenticate API requests when needed.  For details on available Looker SDKs, see [Looker API Client SDKs](https://cloud.google.com/looker/docs/r/api/client_sdks).   ### API Versioning  Future releases of Looker expand the latest API version release-by-release to securely expose more and more of the core power of the Looker platform to API client applications. API endpoints marked as \"beta\" may receive breaking changes without warning (but we will try to avoid doing that). Stable (non-beta) API endpoints should not receive breaking changes in future releases.  For details, see [Looker API Versioning](https://cloud.google.com/looker/docs/r/api/versioning).   ### In This Release  API 4.0 version was introduced to make adjustments to API functions, parameters, and response types to fix bugs and inconsistencies. These changes fall outside the bounds of non-breaking additive changes we can make to the previous API 3.1.  One benefit of these type adjustments in API 4.0 is dramatically better support for strongly typed languages like TypeScript, Kotlin, Swift, Go, C#, and more.  See the [API 4.0 GA announcement](https://developers.looker.com/api/advanced-usage/version-4-ga) for more information about API 4.0.  The API Explorer can be used to [interactively compare](https://cloud.google.com/looker/docs/r/api/explorer#comparing_api_versions) the differences between API 3.1 and 4.0.   ### API and SDK Support Policies  Looker API versions and language SDKs have varying support levels. Please read the API and SDK [support policies](https://cloud.google.com/looker/docs/r/api/support-policy) for more information.
 *
 * OpenAPI spec version: 4.0.23.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * ConfigApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConfigApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for allLegacyFeatures
     *
     * Get All Legacy Features.
     *
     */
    public function testAllLegacyFeatures()
    {
    }

    /**
     * Test case for allLocales
     *
     * Get All Locales.
     *
     */
    public function testAllLocales()
    {
    }

    /**
     * Test case for allTimezones
     *
     * Get All Timezones.
     *
     */
    public function testAllTimezones()
    {
    }

    /**
     * Test case for apiSpec
     *
     * Get an API specification.
     *
     */
    public function testApiSpec()
    {
    }

    /**
     * Test case for cloudStorageConfiguration
     *
     * Get Cloud Storage.
     *
     */
    public function testCloudStorageConfiguration()
    {
    }

    /**
     * Test case for configurationForceRefresh
     *
     * Force Refresh Configuration.
     *
     */
    public function testConfigurationForceRefresh()
    {
    }

    /**
     * Test case for createDigestEmailSend
     *
     * Deliver digest email contents.
     *
     */
    public function testCreateDigestEmailSend()
    {
    }

    /**
     * Test case for customWelcomeEmail
     *
     * Get Custom Welcome Email.
     *
     */
    public function testCustomWelcomeEmail()
    {
    }

    /**
     * Test case for digestEmailsEnabled
     *
     * Get Digest_emails.
     *
     */
    public function testDigestEmailsEnabled()
    {
    }

    /**
     * Test case for getSetting
     *
     * Get Setting.
     *
     */
    public function testGetSetting()
    {
    }

    /**
     * Test case for internalHelpResources
     *
     * Get Internal Help Resources.
     *
     */
    public function testInternalHelpResources()
    {
    }

    /**
     * Test case for internalHelpResourcesContent
     *
     * Get Internal Help Resources Content.
     *
     */
    public function testInternalHelpResourcesContent()
    {
    }

    /**
     * Test case for legacyFeature
     *
     * Get Legacy Feature.
     *
     */
    public function testLegacyFeature()
    {
    }

    /**
     * Test case for mobileSettings
     *
     * Get Mobile_Settings.
     *
     */
    public function testMobileSettings()
    {
    }

    /**
     * Test case for publicEgressIpAddresses
     *
     * Public Egress IP Addresses.
     *
     */
    public function testPublicEgressIpAddresses()
    {
    }

    /**
     * Test case for setSetting
     *
     * Set Setting.
     *
     */
    public function testSetSetting()
    {
    }

    /**
     * Test case for setSmtpSettings
     *
     * Set SMTP Setting.
     *
     */
    public function testSetSmtpSettings()
    {
    }

    /**
     * Test case for smtpStatus
     *
     * Get SMTP Status.
     *
     */
    public function testSmtpStatus()
    {
    }

    /**
     * Test case for updateCloudStorageConfiguration
     *
     * Update Cloud Storage.
     *
     */
    public function testUpdateCloudStorageConfiguration()
    {
    }

    /**
     * Test case for updateCustomWelcomeEmail
     *
     * Update Custom Welcome Email Content.
     *
     */
    public function testUpdateCustomWelcomeEmail()
    {
    }

    /**
     * Test case for updateCustomWelcomeEmailTest
     *
     * Send a test welcome email to the currently logged in user with the supplied content.
     *
     */
    public function testUpdateCustomWelcomeEmailTest()
    {
    }

    /**
     * Test case for updateDigestEmailsEnabled
     *
     * Update Digest_emails.
     *
     */
    public function testUpdateDigestEmailsEnabled()
    {
    }

    /**
     * Test case for updateInternalHelpResources
     *
     * Update internal help resources configuration.
     *
     */
    public function testUpdateInternalHelpResources()
    {
    }

    /**
     * Test case for updateInternalHelpResourcesContent
     *
     * Update internal help resources content.
     *
     */
    public function testUpdateInternalHelpResourcesContent()
    {
    }

    /**
     * Test case for updateLegacyFeature
     *
     * Update Legacy Feature.
     *
     */
    public function testUpdateLegacyFeature()
    {
    }

    /**
     * Test case for updateWhitelabelConfiguration
     *
     * Update Whitelabel configuration.
     *
     */
    public function testUpdateWhitelabelConfiguration()
    {
    }

    /**
     * Test case for versions
     *
     * Get ApiVersion.
     *
     */
    public function testVersions()
    {
    }

    /**
     * Test case for whitelabelConfiguration
     *
     * Get Whitelabel configuration.
     *
     */
    public function testWhitelabelConfiguration()
    {
    }
}