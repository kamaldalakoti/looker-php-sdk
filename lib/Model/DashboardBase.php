<?php
/**
 * DashboardBase
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
 * DashboardBase Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DashboardBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DashboardBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'can' => 'map[string,bool]',
        'content_favorite_id' => 'string',
        'content_metadata_id' => 'string',
        'description' => 'string',
        'hidden' => 'bool',
        'id' => 'string',
        'model' => '\Swagger\Client\Model\LookModel',
        'query_timezone' => 'string',
        'readonly' => 'bool',
        'refresh_interval' => 'string',
        'refresh_interval_to_i' => 'int',
        'folder' => '\Swagger\Client\Model\FolderBase',
        'title' => 'string',
        'user_id' => 'string',
        'slug' => 'string',
        'preferred_viewer' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'can' => null,
        'content_favorite_id' => null,
        'content_metadata_id' => null,
        'description' => null,
        'hidden' => null,
        'id' => null,
        'model' => null,
        'query_timezone' => null,
        'readonly' => null,
        'refresh_interval' => null,
        'refresh_interval_to_i' => 'int64',
        'folder' => null,
        'title' => null,
        'user_id' => null,
        'slug' => null,
        'preferred_viewer' => null
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
        'content_favorite_id' => 'content_favorite_id',
        'content_metadata_id' => 'content_metadata_id',
        'description' => 'description',
        'hidden' => 'hidden',
        'id' => 'id',
        'model' => 'model',
        'query_timezone' => 'query_timezone',
        'readonly' => 'readonly',
        'refresh_interval' => 'refresh_interval',
        'refresh_interval_to_i' => 'refresh_interval_to_i',
        'folder' => 'folder',
        'title' => 'title',
        'user_id' => 'user_id',
        'slug' => 'slug',
        'preferred_viewer' => 'preferred_viewer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can' => 'setCan',
        'content_favorite_id' => 'setContentFavoriteId',
        'content_metadata_id' => 'setContentMetadataId',
        'description' => 'setDescription',
        'hidden' => 'setHidden',
        'id' => 'setId',
        'model' => 'setModel',
        'query_timezone' => 'setQueryTimezone',
        'readonly' => 'setReadonly',
        'refresh_interval' => 'setRefreshInterval',
        'refresh_interval_to_i' => 'setRefreshIntervalToI',
        'folder' => 'setFolder',
        'title' => 'setTitle',
        'user_id' => 'setUserId',
        'slug' => 'setSlug',
        'preferred_viewer' => 'setPreferredViewer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can' => 'getCan',
        'content_favorite_id' => 'getContentFavoriteId',
        'content_metadata_id' => 'getContentMetadataId',
        'description' => 'getDescription',
        'hidden' => 'getHidden',
        'id' => 'getId',
        'model' => 'getModel',
        'query_timezone' => 'getQueryTimezone',
        'readonly' => 'getReadonly',
        'refresh_interval' => 'getRefreshInterval',
        'refresh_interval_to_i' => 'getRefreshIntervalToI',
        'folder' => 'getFolder',
        'title' => 'getTitle',
        'user_id' => 'getUserId',
        'slug' => 'getSlug',
        'preferred_viewer' => 'getPreferredViewer'
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
        $this->container['content_favorite_id'] = isset($data['content_favorite_id']) ? $data['content_favorite_id'] : null;
        $this->container['content_metadata_id'] = isset($data['content_metadata_id']) ? $data['content_metadata_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['hidden'] = isset($data['hidden']) ? $data['hidden'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['query_timezone'] = isset($data['query_timezone']) ? $data['query_timezone'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['refresh_interval'] = isset($data['refresh_interval']) ? $data['refresh_interval'] : null;
        $this->container['refresh_interval_to_i'] = isset($data['refresh_interval_to_i']) ? $data['refresh_interval_to_i'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['preferred_viewer'] = isset($data['preferred_viewer']) ? $data['preferred_viewer'] : null;
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
     * Gets content_favorite_id
     *
     * @return string
     */
    public function getContentFavoriteId()
    {
        return $this->container['content_favorite_id'];
    }

    /**
     * Sets content_favorite_id
     *
     * @param string $content_favorite_id Content Favorite Id
     *
     * @return $this
     */
    public function setContentFavoriteId($content_favorite_id)
    {
        $this->container['content_favorite_id'] = $content_favorite_id;

        return $this;
    }

    /**
     * Gets content_metadata_id
     *
     * @return string
     */
    public function getContentMetadataId()
    {
        return $this->container['content_metadata_id'];
    }

    /**
     * Sets content_metadata_id
     *
     * @param string $content_metadata_id Id of content metadata
     *
     * @return $this
     */
    public function setContentMetadataId($content_metadata_id)
    {
        $this->container['content_metadata_id'] = $content_metadata_id;

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
     * Gets hidden
     *
     * @return bool
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool $hidden Is Hidden
     *
     * @return $this
     */
    public function setHidden($hidden)
    {
        $this->container['hidden'] = $hidden;

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
     * Gets model
     *
     * @return \Swagger\Client\Model\LookModel
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param \Swagger\Client\Model\LookModel $model Model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets query_timezone
     *
     * @return string
     */
    public function getQueryTimezone()
    {
        return $this->container['query_timezone'];
    }

    /**
     * Sets query_timezone
     *
     * @param string $query_timezone Timezone in which the Dashboard will run by default.
     *
     * @return $this
     */
    public function setQueryTimezone($query_timezone)
    {
        $this->container['query_timezone'] = $query_timezone;

        return $this;
    }

    /**
     * Gets readonly
     *
     * @return bool
     */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
     * Sets readonly
     *
     * @param bool $readonly Is Read-only
     *
     * @return $this
     */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;

        return $this;
    }

    /**
     * Gets refresh_interval
     *
     * @return string
     */
    public function getRefreshInterval()
    {
        return $this->container['refresh_interval'];
    }

    /**
     * Sets refresh_interval
     *
     * @param string $refresh_interval Refresh Interval, as a time duration phrase like \"2 hours 30 minutes\". A number with no time units will be interpreted as whole seconds.
     *
     * @return $this
     */
    public function setRefreshInterval($refresh_interval)
    {
        $this->container['refresh_interval'] = $refresh_interval;

        return $this;
    }

    /**
     * Gets refresh_interval_to_i
     *
     * @return int
     */
    public function getRefreshIntervalToI()
    {
        return $this->container['refresh_interval_to_i'];
    }

    /**
     * Sets refresh_interval_to_i
     *
     * @param int $refresh_interval_to_i Refresh Interval in milliseconds
     *
     * @return $this
     */
    public function setRefreshIntervalToI($refresh_interval_to_i)
    {
        $this->container['refresh_interval_to_i'] = $refresh_interval_to_i;

        return $this;
    }

    /**
     * Gets folder
     *
     * @return \Swagger\Client\Model\FolderBase
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param \Swagger\Client\Model\FolderBase $folder Folder
     *
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Dashboard Title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id Id of User
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug Content Metadata Slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets preferred_viewer
     *
     * @return string
     */
    public function getPreferredViewer()
    {
        return $this->container['preferred_viewer'];
    }

    /**
     * Sets preferred_viewer
     *
     * @param string $preferred_viewer The preferred route for viewing this dashboard (ie: dashboards or dashboards-next)
     *
     * @return $this
     */
    public function setPreferredViewer($preferred_viewer)
    {
        $this->container['preferred_viewer'] = $preferred_viewer;

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

