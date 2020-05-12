<?php

namespace Map;

use \WebinarUser;
use \WebinarUserQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'webinar_user' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class WebinarUserTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.WebinarUserTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'webinar_user';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\WebinarUser';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'WebinarUser';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 14;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 14;

    /**
     * the column name for the webinar_id field
     */
    const COL_WEBINAR_ID = 'webinar_user.webinar_id';

    /**
     * the column name for the user_id field
     */
    const COL_USER_ID = 'webinar_user.user_id';

    /**
     * the column name for the first_name field
     */
    const COL_FIRST_NAME = 'webinar_user.first_name';

    /**
     * the column name for the last_name field
     */
    const COL_LAST_NAME = 'webinar_user.last_name';

    /**
     * the column name for the phone_country_code field
     */
    const COL_PHONE_COUNTRY_CODE = 'webinar_user.phone_country_code';

    /**
     * the column name for the phone field
     */
    const COL_PHONE = 'webinar_user.phone';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'webinar_user.email';

    /**
     * the column name for the password field
     */
    const COL_PASSWORD = 'webinar_user.password';

    /**
     * the column name for the schedule field
     */
    const COL_SCHEDULE = 'webinar_user.schedule';

    /**
     * the column name for the date field
     */
    const COL_DATE = 'webinar_user.date';

    /**
     * the column name for the timezone field
     */
    const COL_TIMEZONE = 'webinar_user.timezone';

    /**
     * the column name for the live_room_url field
     */
    const COL_LIVE_ROOM_URL = 'webinar_user.live_room_url';

    /**
     * the column name for the replay_room_url field
     */
    const COL_REPLAY_ROOM_URL = 'webinar_user.replay_room_url';

    /**
     * the column name for the thank_you_url field
     */
    const COL_THANK_YOU_URL = 'webinar_user.thank_you_url';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('WebinarId', 'UserId', 'FirstName', 'LastName', 'PhoneCountryCode', 'Phone', 'Email', 'Password', 'Schedule', 'Date', 'Timezone', 'LiveRoomUrl', 'ReplayRoomUrl', 'ThankYouUrl', ),
        self::TYPE_CAMELNAME     => array('webinarId', 'userId', 'firstName', 'lastName', 'phoneCountryCode', 'phone', 'email', 'password', 'schedule', 'date', 'timezone', 'liveRoomUrl', 'replayRoomUrl', 'thankYouUrl', ),
        self::TYPE_COLNAME       => array(WebinarUserTableMap::COL_WEBINAR_ID, WebinarUserTableMap::COL_USER_ID, WebinarUserTableMap::COL_FIRST_NAME, WebinarUserTableMap::COL_LAST_NAME, WebinarUserTableMap::COL_PHONE_COUNTRY_CODE, WebinarUserTableMap::COL_PHONE, WebinarUserTableMap::COL_EMAIL, WebinarUserTableMap::COL_PASSWORD, WebinarUserTableMap::COL_SCHEDULE, WebinarUserTableMap::COL_DATE, WebinarUserTableMap::COL_TIMEZONE, WebinarUserTableMap::COL_LIVE_ROOM_URL, WebinarUserTableMap::COL_REPLAY_ROOM_URL, WebinarUserTableMap::COL_THANK_YOU_URL, ),
        self::TYPE_FIELDNAME     => array('webinar_id', 'user_id', 'first_name', 'last_name', 'phone_country_code', 'phone', 'email', 'password', 'schedule', 'date', 'timezone', 'live_room_url', 'replay_room_url', 'thank_you_url', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('WebinarId' => 0, 'UserId' => 1, 'FirstName' => 2, 'LastName' => 3, 'PhoneCountryCode' => 4, 'Phone' => 5, 'Email' => 6, 'Password' => 7, 'Schedule' => 8, 'Date' => 9, 'Timezone' => 10, 'LiveRoomUrl' => 11, 'ReplayRoomUrl' => 12, 'ThankYouUrl' => 13, ),
        self::TYPE_CAMELNAME     => array('webinarId' => 0, 'userId' => 1, 'firstName' => 2, 'lastName' => 3, 'phoneCountryCode' => 4, 'phone' => 5, 'email' => 6, 'password' => 7, 'schedule' => 8, 'date' => 9, 'timezone' => 10, 'liveRoomUrl' => 11, 'replayRoomUrl' => 12, 'thankYouUrl' => 13, ),
        self::TYPE_COLNAME       => array(WebinarUserTableMap::COL_WEBINAR_ID => 0, WebinarUserTableMap::COL_USER_ID => 1, WebinarUserTableMap::COL_FIRST_NAME => 2, WebinarUserTableMap::COL_LAST_NAME => 3, WebinarUserTableMap::COL_PHONE_COUNTRY_CODE => 4, WebinarUserTableMap::COL_PHONE => 5, WebinarUserTableMap::COL_EMAIL => 6, WebinarUserTableMap::COL_PASSWORD => 7, WebinarUserTableMap::COL_SCHEDULE => 8, WebinarUserTableMap::COL_DATE => 9, WebinarUserTableMap::COL_TIMEZONE => 10, WebinarUserTableMap::COL_LIVE_ROOM_URL => 11, WebinarUserTableMap::COL_REPLAY_ROOM_URL => 12, WebinarUserTableMap::COL_THANK_YOU_URL => 13, ),
        self::TYPE_FIELDNAME     => array('webinar_id' => 0, 'user_id' => 1, 'first_name' => 2, 'last_name' => 3, 'phone_country_code' => 4, 'phone' => 5, 'email' => 6, 'password' => 7, 'schedule' => 8, 'date' => 9, 'timezone' => 10, 'live_room_url' => 11, 'replay_room_url' => 12, 'thank_you_url' => 13, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('webinar_user');
        $this->setPhpName('WebinarUser');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\WebinarUser');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('webinar_id', 'WebinarId', 'INTEGER', true, null, null);
        $this->addColumn('user_id', 'UserId', 'INTEGER', true, null, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', true, 20, null);
        $this->addColumn('last_name', 'LastName', 'VARCHAR', true, 20, null);
        $this->addColumn('phone_country_code', 'PhoneCountryCode', 'VARCHAR', true, 5, null);
        $this->addColumn('phone', 'Phone', 'VARCHAR', true, 10, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 30, null);
        $this->addColumn('password', 'Password', 'VARCHAR', true, 20, null);
        $this->addColumn('schedule', 'Schedule', 'INTEGER', true, null, null);
        $this->addColumn('date', 'Date', 'VARCHAR', true, 20, null);
        $this->addColumn('timezone', 'Timezone', 'VARCHAR', true, 20, null);
        $this->addColumn('live_room_url', 'LiveRoomUrl', 'VARCHAR', true, 50, null);
        $this->addColumn('replay_room_url', 'ReplayRoomUrl', 'VARCHAR', true, 50, null);
        $this->addColumn('thank_you_url', 'ThankYouUrl', 'VARCHAR', true, 50, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return null;
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return '';
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? WebinarUserTableMap::CLASS_DEFAULT : WebinarUserTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (WebinarUser object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = WebinarUserTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = WebinarUserTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + WebinarUserTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = WebinarUserTableMap::OM_CLASS;
            /** @var WebinarUser $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            WebinarUserTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = WebinarUserTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = WebinarUserTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var WebinarUser $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                WebinarUserTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(WebinarUserTableMap::COL_WEBINAR_ID);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_USER_ID);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_FIRST_NAME);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_LAST_NAME);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_PHONE_COUNTRY_CODE);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_PHONE);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_EMAIL);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_PASSWORD);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_SCHEDULE);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_DATE);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_TIMEZONE);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_LIVE_ROOM_URL);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_REPLAY_ROOM_URL);
            $criteria->addSelectColumn(WebinarUserTableMap::COL_THANK_YOU_URL);
        } else {
            $criteria->addSelectColumn($alias . '.webinar_id');
            $criteria->addSelectColumn($alias . '.user_id');
            $criteria->addSelectColumn($alias . '.first_name');
            $criteria->addSelectColumn($alias . '.last_name');
            $criteria->addSelectColumn($alias . '.phone_country_code');
            $criteria->addSelectColumn($alias . '.phone');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.password');
            $criteria->addSelectColumn($alias . '.schedule');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.timezone');
            $criteria->addSelectColumn($alias . '.live_room_url');
            $criteria->addSelectColumn($alias . '.replay_room_url');
            $criteria->addSelectColumn($alias . '.thank_you_url');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(WebinarUserTableMap::DATABASE_NAME)->getTable(WebinarUserTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(WebinarUserTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(WebinarUserTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new WebinarUserTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a WebinarUser or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or WebinarUser object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WebinarUserTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \WebinarUser) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The WebinarUser object has no primary key');
        }

        $query = WebinarUserQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            WebinarUserTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                WebinarUserTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the webinar_user table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return WebinarUserQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a WebinarUser or Criteria object.
     *
     * @param mixed               $criteria Criteria or WebinarUser object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WebinarUserTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from WebinarUser object
        }


        // Set the correct dbName
        $query = WebinarUserQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // WebinarUserTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
WebinarUserTableMap::buildTableMap();
