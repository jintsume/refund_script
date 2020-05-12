<?php

namespace Map;

use \ActiveCampaignContacts;
use \ActiveCampaignContactsQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'active_campaign_contacts' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class ActiveCampaignContactsTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = '.Map.ActiveCampaignContactsTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'active_campaign_contacts';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ActiveCampaignContacts';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ActiveCampaignContacts';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the id field
     */
    const COL_ID = 'active_campaign_contacts.id';

    /**
     * the column name for the first_name field
     */
    const COL_FIRST_NAME = 'active_campaign_contacts.first_name';

    /**
     * the column name for the last_name field
     */
    const COL_LAST_NAME = 'active_campaign_contacts.last_name';

    /**
     * the column name for the email field
     */
    const COL_EMAIL = 'active_campaign_contacts.email';

    /**
     * the column name for the refund_tag_names field
     */
    const COL_REFUND_TAG_NAMES = 'active_campaign_contacts.refund_tag_names';

    /**
     * the column name for the recurring_status field
     */
    const COL_RECURRING_STATUS = 'active_campaign_contacts.recurring_status';

    /**
     * the column name for the products_purchased field
     */
    const COL_PRODUCTS_PURCHASED = 'active_campaign_contacts.products_purchased';

    /**
     * the column name for the stripe_refund_processed field
     */
    const COL_STRIPE_REFUND_PROCESSED = 'active_campaign_contacts.stripe_refund_processed';

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
        self::TYPE_PHPNAME       => array('Id', 'FirstName', 'LastName', 'Email', 'RefundTagNames', 'RecurringStatus', 'ProductsPurchased', 'StripeRefundProcessed', ),
        self::TYPE_CAMELNAME     => array('id', 'firstName', 'lastName', 'email', 'refundTagNames', 'recurringStatus', 'productsPurchased', 'stripeRefundProcessed', ),
        self::TYPE_COLNAME       => array(ActiveCampaignContactsTableMap::COL_ID, ActiveCampaignContactsTableMap::COL_FIRST_NAME, ActiveCampaignContactsTableMap::COL_LAST_NAME, ActiveCampaignContactsTableMap::COL_EMAIL, ActiveCampaignContactsTableMap::COL_REFUND_TAG_NAMES, ActiveCampaignContactsTableMap::COL_RECURRING_STATUS, ActiveCampaignContactsTableMap::COL_PRODUCTS_PURCHASED, ActiveCampaignContactsTableMap::COL_STRIPE_REFUND_PROCESSED, ),
        self::TYPE_FIELDNAME     => array('id', 'first_name', 'last_name', 'email', 'refund_tag_names', 'recurring_status', 'products_purchased', 'stripe_refund_processed', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'FirstName' => 1, 'LastName' => 2, 'Email' => 3, 'RefundTagNames' => 4, 'RecurringStatus' => 5, 'ProductsPurchased' => 6, 'StripeRefundProcessed' => 7, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'firstName' => 1, 'lastName' => 2, 'email' => 3, 'refundTagNames' => 4, 'recurringStatus' => 5, 'productsPurchased' => 6, 'stripeRefundProcessed' => 7, ),
        self::TYPE_COLNAME       => array(ActiveCampaignContactsTableMap::COL_ID => 0, ActiveCampaignContactsTableMap::COL_FIRST_NAME => 1, ActiveCampaignContactsTableMap::COL_LAST_NAME => 2, ActiveCampaignContactsTableMap::COL_EMAIL => 3, ActiveCampaignContactsTableMap::COL_REFUND_TAG_NAMES => 4, ActiveCampaignContactsTableMap::COL_RECURRING_STATUS => 5, ActiveCampaignContactsTableMap::COL_PRODUCTS_PURCHASED => 6, ActiveCampaignContactsTableMap::COL_STRIPE_REFUND_PROCESSED => 7, ),
        self::TYPE_FIELDNAME     => array('id' => 0, 'first_name' => 1, 'last_name' => 2, 'email' => 3, 'refund_tag_names' => 4, 'recurring_status' => 5, 'products_purchased' => 6, 'stripe_refund_processed' => 7, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, )
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
        $this->setName('active_campaign_contacts');
        $this->setPhpName('ActiveCampaignContacts');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ActiveCampaignContacts');
        $this->setPackage('');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id', 'Id', 'BIGINT', true, null, null);
        $this->addColumn('first_name', 'FirstName', 'VARCHAR', true, 255, null);
        $this->addColumn('last_name', 'LastName', 'VARCHAR', true, 255, null);
        $this->addColumn('email', 'Email', 'VARCHAR', true, 255, null);
        $this->addColumn('refund_tag_names', 'RefundTagNames', 'VARCHAR', true, 2000, null);
        $this->addColumn('recurring_status', 'RecurringStatus', 'VARCHAR', true, 255, null);
        $this->addColumn('products_purchased', 'ProductsPurchased', 'VARCHAR', true, 2000, null);
        $this->addColumn('stripe_refund_processed', 'StripeRefundProcessed', 'BOOLEAN', true, 1, false);
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
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
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
        return $withPrefix ? ActiveCampaignContactsTableMap::CLASS_DEFAULT : ActiveCampaignContactsTableMap::OM_CLASS;
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
     * @return array           (ActiveCampaignContacts object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = ActiveCampaignContactsTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = ActiveCampaignContactsTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + ActiveCampaignContactsTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ActiveCampaignContactsTableMap::OM_CLASS;
            /** @var ActiveCampaignContacts $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            ActiveCampaignContactsTableMap::addInstanceToPool($obj, $key);
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
            $key = ActiveCampaignContactsTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = ActiveCampaignContactsTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var ActiveCampaignContacts $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ActiveCampaignContactsTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(ActiveCampaignContactsTableMap::COL_ID);
            $criteria->addSelectColumn(ActiveCampaignContactsTableMap::COL_FIRST_NAME);
            $criteria->addSelectColumn(ActiveCampaignContactsTableMap::COL_LAST_NAME);
            $criteria->addSelectColumn(ActiveCampaignContactsTableMap::COL_EMAIL);
            $criteria->addSelectColumn(ActiveCampaignContactsTableMap::COL_REFUND_TAG_NAMES);
            $criteria->addSelectColumn(ActiveCampaignContactsTableMap::COL_RECURRING_STATUS);
            $criteria->addSelectColumn(ActiveCampaignContactsTableMap::COL_PRODUCTS_PURCHASED);
            $criteria->addSelectColumn(ActiveCampaignContactsTableMap::COL_STRIPE_REFUND_PROCESSED);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.first_name');
            $criteria->addSelectColumn($alias . '.last_name');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.refund_tag_names');
            $criteria->addSelectColumn($alias . '.recurring_status');
            $criteria->addSelectColumn($alias . '.products_purchased');
            $criteria->addSelectColumn($alias . '.stripe_refund_processed');
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
        return Propel::getServiceContainer()->getDatabaseMap(ActiveCampaignContactsTableMap::DATABASE_NAME)->getTable(ActiveCampaignContactsTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(ActiveCampaignContactsTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(ActiveCampaignContactsTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new ActiveCampaignContactsTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a ActiveCampaignContacts or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or ActiveCampaignContacts object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(ActiveCampaignContactsTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ActiveCampaignContacts) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ActiveCampaignContactsTableMap::DATABASE_NAME);
            $criteria->add(ActiveCampaignContactsTableMap::COL_ID, (array) $values, Criteria::IN);
        }

        $query = ActiveCampaignContactsQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            ActiveCampaignContactsTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                ActiveCampaignContactsTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the active_campaign_contacts table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return ActiveCampaignContactsQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a ActiveCampaignContacts or Criteria object.
     *
     * @param mixed               $criteria Criteria or ActiveCampaignContacts object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(ActiveCampaignContactsTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from ActiveCampaignContacts object
        }


        // Set the correct dbName
        $query = ActiveCampaignContactsQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // ActiveCampaignContactsTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
ActiveCampaignContactsTableMap::buildTableMap();
