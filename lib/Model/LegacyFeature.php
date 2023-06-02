<?php
/**
 * LegacyFeature
 *
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
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * LegacyFeature Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LegacyFeature implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LegacyFeature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'enabled_locally' => 'bool',
        'enabled' => 'bool',
        'disallowed_as_of_version' => 'string',
        'disable_on_upgrade_to_version' => 'string',
        'end_of_life_version' => 'string',
        'documentation_url' => 'string',
        'approximate_disable_date' => '\DateTime',
        'approximate_end_of_life_date' => '\DateTime',
        'has_disabled_on_upgrade' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'enabled_locally' => null,
        'enabled' => null,
        'disallowed_as_of_version' => null,
        'disable_on_upgrade_to_version' => null,
        'end_of_life_version' => null,
        'documentation_url' => null,
        'approximate_disable_date' => 'date-time',
        'approximate_end_of_life_date' => 'date-time',
        'has_disabled_on_upgrade' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'can' => 'can',
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'enabled_locally' => 'enabled_locally',
        'enabled' => 'enabled',
        'disallowed_as_of_version' => 'disallowed_as_of_version',
        'disable_on_upgrade_to_version' => 'disable_on_upgrade_to_version',
        'end_of_life_version' => 'end_of_life_version',
        'documentation_url' => 'documentation_url',
        'approximate_disable_date' => 'approximate_disable_date',
        'approximate_end_of_life_date' => 'approximate_end_of_life_date',
        'has_disabled_on_upgrade' => 'has_disabled_on_upgrade'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'enabled_locally' => 'setEnabledLocally',
        'enabled' => 'setEnabled',
        'disallowed_as_of_version' => 'setDisallowedAsOfVersion',
        'disable_on_upgrade_to_version' => 'setDisableOnUpgradeToVersion',
        'end_of_life_version' => 'setEndOfLifeVersion',
        'documentation_url' => 'setDocumentationUrl',
        'approximate_disable_date' => 'setApproximateDisableDate',
        'approximate_end_of_life_date' => 'setApproximateEndOfLifeDate',
        'has_disabled_on_upgrade' => 'setHasDisabledOnUpgrade'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'enabled_locally' => 'getEnabledLocally',
        'enabled' => 'getEnabled',
        'disallowed_as_of_version' => 'getDisallowedAsOfVersion',
        'disable_on_upgrade_to_version' => 'getDisableOnUpgradeToVersion',
        'end_of_life_version' => 'getEndOfLifeVersion',
        'documentation_url' => 'getDocumentationUrl',
        'approximate_disable_date' => 'getApproximateDisableDate',
        'approximate_end_of_life_date' => 'getApproximateEndOfLifeDate',
        'has_disabled_on_upgrade' => 'getHasDisabledOnUpgrade'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['can'] = isset($data['can']) ? $data['can'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enabled_locally'] = isset($data['enabled_locally']) ? $data['enabled_locally'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['disallowed_as_of_version'] = isset($data['disallowed_as_of_version']) ? $data['disallowed_as_of_version'] : null;
        $this->container['disable_on_upgrade_to_version'] = isset($data['disable_on_upgrade_to_version']) ? $data['disable_on_upgrade_to_version'] : null;
        $this->container['end_of_life_version'] = isset($data['end_of_life_version']) ? $data['end_of_life_version'] : null;
        $this->container['documentation_url'] = isset($data['documentation_url']) ? $data['documentation_url'] : null;
        $this->container['approximate_disable_date'] = isset($data['approximate_disable_date']) ? $data['approximate_disable_date'] : null;
        $this->container['approximate_end_of_life_date'] = isset($data['approximate_end_of_life_date']) ? $data['approximate_end_of_life_date'] : null;
        $this->container['has_disabled_on_upgrade'] = isset($data['has_disabled_on_upgrade']) ? $data['has_disabled_on_upgrade'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets can
     *
     * @return map[string,bool]
     */
    public function getCan()
    {
        return $this->container['can'];
    }

    /**
     * Sets can
     *
     * @param map[string,bool] $can Operations the current user is able to perform on this object
     *
     * @return $this
     */
    public function setCan($can)
    {
        $this->container['can'] = $can;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Unique Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets enabled_locally
     *
     * @return bool
     */
    public function getEnabledLocally()
    {
        return $this->container['enabled_locally'];
    }

    /**
     * Sets enabled_locally
     *
     * @param bool $enabled_locally Whether this feature has been enabled by a user
     *
     * @return $this
     */
    public function setEnabledLocally($enabled_locally)
    {
        $this->container['enabled_locally'] = $enabled_locally;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Whether this feature is currently enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets disallowed_as_of_version
     *
     * @return string
     */
    public function getDisallowedAsOfVersion()
    {
        return $this->container['disallowed_as_of_version'];
    }

    /**
     * Sets disallowed_as_of_version
     *
     * @param string $disallowed_as_of_version Looker version where this feature became a legacy feature
     *
     * @return $this
     */
    public function setDisallowedAsOfVersion($disallowed_as_of_version)
    {
        $this->container['disallowed_as_of_version'] = $disallowed_as_of_version;

        return $this;
    }

    /**
     * Gets disable_on_upgrade_to_version
     *
     * @return string
     */
    public function getDisableOnUpgradeToVersion()
    {
        return $this->container['disable_on_upgrade_to_version'];
    }

    /**
     * Sets disable_on_upgrade_to_version
     *
     * @param string $disable_on_upgrade_to_version Looker version where this feature will be automatically disabled
     *
     * @return $this
     */
    public function setDisableOnUpgradeToVersion($disable_on_upgrade_to_version)
    {
        $this->container['disable_on_upgrade_to_version'] = $disable_on_upgrade_to_version;

        return $this;
    }

    /**
     * Gets end_of_life_version
     *
     * @return string
     */
    public function getEndOfLifeVersion()
    {
        return $this->container['end_of_life_version'];
    }

    /**
     * Sets end_of_life_version
     *
     * @param string $end_of_life_version Future Looker version where this feature will be removed
     *
     * @return $this
     */
    public function setEndOfLifeVersion($end_of_life_version)
    {
        $this->container['end_of_life_version'] = $end_of_life_version;

        return $this;
    }

    /**
     * Gets documentation_url
     *
     * @return string
     */
    public function getDocumentationUrl()
    {
        return $this->container['documentation_url'];
    }

    /**
     * Sets documentation_url
     *
     * @param string $documentation_url URL for documentation about this feature
     *
     * @return $this
     */
    public function setDocumentationUrl($documentation_url)
    {
        $this->container['documentation_url'] = $documentation_url;

        return $this;
    }

    /**
     * Gets approximate_disable_date
     *
     * @return \DateTime
     */
    public function getApproximateDisableDate()
    {
        return $this->container['approximate_disable_date'];
    }

    /**
     * Sets approximate_disable_date
     *
     * @param \DateTime $approximate_disable_date Approximate date that this feature will be automatically disabled.
     *
     * @return $this
     */
    public function setApproximateDisableDate($approximate_disable_date)
    {
        $this->container['approximate_disable_date'] = $approximate_disable_date;

        return $this;
    }

    /**
     * Gets approximate_end_of_life_date
     *
     * @return \DateTime
     */
    public function getApproximateEndOfLifeDate()
    {
        return $this->container['approximate_end_of_life_date'];
    }

    /**
     * Sets approximate_end_of_life_date
     *
     * @param \DateTime $approximate_end_of_life_date Approximate date that this feature will be removed.
     *
     * @return $this
     */
    public function setApproximateEndOfLifeDate($approximate_end_of_life_date)
    {
        $this->container['approximate_end_of_life_date'] = $approximate_end_of_life_date;

        return $this;
    }

    /**
     * Gets has_disabled_on_upgrade
     *
     * @return bool
     */
    public function getHasDisabledOnUpgrade()
    {
        return $this->container['has_disabled_on_upgrade'];
    }

    /**
     * Sets has_disabled_on_upgrade
     *
     * @param bool $has_disabled_on_upgrade Whether this legacy feature may have been automatically disabled when upgrading to the current version.
     *
     * @return $this
     */
    public function setHasDisabledOnUpgrade($has_disabled_on_upgrade)
    {
        $this->container['has_disabled_on_upgrade'] = $has_disabled_on_upgrade;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

