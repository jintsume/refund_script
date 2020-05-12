<?php

namespace Base;

use \WebinarUser as ChildWebinarUser;
use \WebinarUserQuery as ChildWebinarUserQuery;
use \Exception;
use Map\WebinarUserTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;

/**
 * Base class that represents a query for the 'webinar_user' table.
 *
 *
 *
 * @method     ChildWebinarUserQuery orderByWebinarId($order = Criteria::ASC) Order by the webinar_id column
 * @method     ChildWebinarUserQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ChildWebinarUserQuery orderByFirstName($order = Criteria::ASC) Order by the first_name column
 * @method     ChildWebinarUserQuery orderByLastName($order = Criteria::ASC) Order by the last_name column
 * @method     ChildWebinarUserQuery orderByPhoneCountryCode($order = Criteria::ASC) Order by the phone_country_code column
 * @method     ChildWebinarUserQuery orderByPhone($order = Criteria::ASC) Order by the phone column
 * @method     ChildWebinarUserQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method     ChildWebinarUserQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method     ChildWebinarUserQuery orderBySchedule($order = Criteria::ASC) Order by the schedule column
 * @method     ChildWebinarUserQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method     ChildWebinarUserQuery orderByTimezone($order = Criteria::ASC) Order by the timezone column
 * @method     ChildWebinarUserQuery orderByLiveRoomUrl($order = Criteria::ASC) Order by the live_room_url column
 * @method     ChildWebinarUserQuery orderByReplayRoomUrl($order = Criteria::ASC) Order by the replay_room_url column
 * @method     ChildWebinarUserQuery orderByThankYouUrl($order = Criteria::ASC) Order by the thank_you_url column
 *
 * @method     ChildWebinarUserQuery groupByWebinarId() Group by the webinar_id column
 * @method     ChildWebinarUserQuery groupByUserId() Group by the user_id column
 * @method     ChildWebinarUserQuery groupByFirstName() Group by the first_name column
 * @method     ChildWebinarUserQuery groupByLastName() Group by the last_name column
 * @method     ChildWebinarUserQuery groupByPhoneCountryCode() Group by the phone_country_code column
 * @method     ChildWebinarUserQuery groupByPhone() Group by the phone column
 * @method     ChildWebinarUserQuery groupByEmail() Group by the email column
 * @method     ChildWebinarUserQuery groupByPassword() Group by the password column
 * @method     ChildWebinarUserQuery groupBySchedule() Group by the schedule column
 * @method     ChildWebinarUserQuery groupByDate() Group by the date column
 * @method     ChildWebinarUserQuery groupByTimezone() Group by the timezone column
 * @method     ChildWebinarUserQuery groupByLiveRoomUrl() Group by the live_room_url column
 * @method     ChildWebinarUserQuery groupByReplayRoomUrl() Group by the replay_room_url column
 * @method     ChildWebinarUserQuery groupByThankYouUrl() Group by the thank_you_url column
 *
 * @method     ChildWebinarUserQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildWebinarUserQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildWebinarUserQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildWebinarUserQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildWebinarUserQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildWebinarUserQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildWebinarUser findOne(ConnectionInterface $con = null) Return the first ChildWebinarUser matching the query
 * @method     ChildWebinarUser findOneOrCreate(ConnectionInterface $con = null) Return the first ChildWebinarUser matching the query, or a new ChildWebinarUser object populated from the query conditions when no match is found
 *
 * @method     ChildWebinarUser findOneByWebinarId(int $webinar_id) Return the first ChildWebinarUser filtered by the webinar_id column
 * @method     ChildWebinarUser findOneByUserId(int $user_id) Return the first ChildWebinarUser filtered by the user_id column
 * @method     ChildWebinarUser findOneByFirstName(string $first_name) Return the first ChildWebinarUser filtered by the first_name column
 * @method     ChildWebinarUser findOneByLastName(string $last_name) Return the first ChildWebinarUser filtered by the last_name column
 * @method     ChildWebinarUser findOneByPhoneCountryCode(string $phone_country_code) Return the first ChildWebinarUser filtered by the phone_country_code column
 * @method     ChildWebinarUser findOneByPhone(string $phone) Return the first ChildWebinarUser filtered by the phone column
 * @method     ChildWebinarUser findOneByEmail(string $email) Return the first ChildWebinarUser filtered by the email column
 * @method     ChildWebinarUser findOneByPassword(string $password) Return the first ChildWebinarUser filtered by the password column
 * @method     ChildWebinarUser findOneBySchedule(int $schedule) Return the first ChildWebinarUser filtered by the schedule column
 * @method     ChildWebinarUser findOneByDate(string $date) Return the first ChildWebinarUser filtered by the date column
 * @method     ChildWebinarUser findOneByTimezone(string $timezone) Return the first ChildWebinarUser filtered by the timezone column
 * @method     ChildWebinarUser findOneByLiveRoomUrl(string $live_room_url) Return the first ChildWebinarUser filtered by the live_room_url column
 * @method     ChildWebinarUser findOneByReplayRoomUrl(string $replay_room_url) Return the first ChildWebinarUser filtered by the replay_room_url column
 * @method     ChildWebinarUser findOneByThankYouUrl(string $thank_you_url) Return the first ChildWebinarUser filtered by the thank_you_url column *

 * @method     ChildWebinarUser requirePk($key, ConnectionInterface $con = null) Return the ChildWebinarUser by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOne(ConnectionInterface $con = null) Return the first ChildWebinarUser matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWebinarUser requireOneByWebinarId(int $webinar_id) Return the first ChildWebinarUser filtered by the webinar_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByUserId(int $user_id) Return the first ChildWebinarUser filtered by the user_id column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByFirstName(string $first_name) Return the first ChildWebinarUser filtered by the first_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByLastName(string $last_name) Return the first ChildWebinarUser filtered by the last_name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByPhoneCountryCode(string $phone_country_code) Return the first ChildWebinarUser filtered by the phone_country_code column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByPhone(string $phone) Return the first ChildWebinarUser filtered by the phone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByEmail(string $email) Return the first ChildWebinarUser filtered by the email column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByPassword(string $password) Return the first ChildWebinarUser filtered by the password column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneBySchedule(int $schedule) Return the first ChildWebinarUser filtered by the schedule column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByDate(string $date) Return the first ChildWebinarUser filtered by the date column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByTimezone(string $timezone) Return the first ChildWebinarUser filtered by the timezone column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByLiveRoomUrl(string $live_room_url) Return the first ChildWebinarUser filtered by the live_room_url column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByReplayRoomUrl(string $replay_room_url) Return the first ChildWebinarUser filtered by the replay_room_url column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildWebinarUser requireOneByThankYouUrl(string $thank_you_url) Return the first ChildWebinarUser filtered by the thank_you_url column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildWebinarUser[]|ObjectCollection find(ConnectionInterface $con = null) Return ChildWebinarUser objects based on current ModelCriteria
 * @method     ChildWebinarUser[]|ObjectCollection findByWebinarId(int $webinar_id) Return ChildWebinarUser objects filtered by the webinar_id column
 * @method     ChildWebinarUser[]|ObjectCollection findByUserId(int $user_id) Return ChildWebinarUser objects filtered by the user_id column
 * @method     ChildWebinarUser[]|ObjectCollection findByFirstName(string $first_name) Return ChildWebinarUser objects filtered by the first_name column
 * @method     ChildWebinarUser[]|ObjectCollection findByLastName(string $last_name) Return ChildWebinarUser objects filtered by the last_name column
 * @method     ChildWebinarUser[]|ObjectCollection findByPhoneCountryCode(string $phone_country_code) Return ChildWebinarUser objects filtered by the phone_country_code column
 * @method     ChildWebinarUser[]|ObjectCollection findByPhone(string $phone) Return ChildWebinarUser objects filtered by the phone column
 * @method     ChildWebinarUser[]|ObjectCollection findByEmail(string $email) Return ChildWebinarUser objects filtered by the email column
 * @method     ChildWebinarUser[]|ObjectCollection findByPassword(string $password) Return ChildWebinarUser objects filtered by the password column
 * @method     ChildWebinarUser[]|ObjectCollection findBySchedule(int $schedule) Return ChildWebinarUser objects filtered by the schedule column
 * @method     ChildWebinarUser[]|ObjectCollection findByDate(string $date) Return ChildWebinarUser objects filtered by the date column
 * @method     ChildWebinarUser[]|ObjectCollection findByTimezone(string $timezone) Return ChildWebinarUser objects filtered by the timezone column
 * @method     ChildWebinarUser[]|ObjectCollection findByLiveRoomUrl(string $live_room_url) Return ChildWebinarUser objects filtered by the live_room_url column
 * @method     ChildWebinarUser[]|ObjectCollection findByReplayRoomUrl(string $replay_room_url) Return ChildWebinarUser objects filtered by the replay_room_url column
 * @method     ChildWebinarUser[]|ObjectCollection findByThankYouUrl(string $thank_you_url) Return ChildWebinarUser objects filtered by the thank_you_url column
 * @method     ChildWebinarUser[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 *
 */
abstract class WebinarUserQuery extends ModelCriteria
{
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Base\WebinarUserQuery object.
     *
     * @param     string $dbName The database name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'default', $modelName = '\\WebinarUser', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildWebinarUserQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildWebinarUserQuery
     */
    public static function create($modelAlias = null, Criteria $criteria = null)
    {
        if ($criteria instanceof ChildWebinarUserQuery) {
            return $criteria;
        }
        $query = new ChildWebinarUserQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildWebinarUser|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ConnectionInterface $con = null)
    {
        throw new LogicException('The WebinarUser object has no primary key');
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return ObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        throw new LogicException('The WebinarUser object has no primary key');
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        throw new LogicException('The WebinarUser object has no primary key');
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        throw new LogicException('The WebinarUser object has no primary key');
    }

    /**
     * Filter the query on the webinar_id column
     *
     * Example usage:
     * <code>
     * $query->filterByWebinarId(1234); // WHERE webinar_id = 1234
     * $query->filterByWebinarId(array(12, 34)); // WHERE webinar_id IN (12, 34)
     * $query->filterByWebinarId(array('min' => 12)); // WHERE webinar_id > 12
     * </code>
     *
     * @param     mixed $webinarId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByWebinarId($webinarId = null, $comparison = null)
    {
        if (is_array($webinarId)) {
            $useMinMax = false;
            if (isset($webinarId['min'])) {
                $this->addUsingAlias(WebinarUserTableMap::COL_WEBINAR_ID, $webinarId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($webinarId['max'])) {
                $this->addUsingAlias(WebinarUserTableMap::COL_WEBINAR_ID, $webinarId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_WEBINAR_ID, $webinarId, $comparison);
    }

    /**
     * Filter the query on the user_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUserId(1234); // WHERE user_id = 1234
     * $query->filterByUserId(array(12, 34)); // WHERE user_id IN (12, 34)
     * $query->filterByUserId(array('min' => 12)); // WHERE user_id > 12
     * </code>
     *
     * @param     mixed $userId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByUserId($userId = null, $comparison = null)
    {
        if (is_array($userId)) {
            $useMinMax = false;
            if (isset($userId['min'])) {
                $this->addUsingAlias(WebinarUserTableMap::COL_USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($userId['max'])) {
                $this->addUsingAlias(WebinarUserTableMap::COL_USER_ID, $userId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_USER_ID, $userId, $comparison);
    }

    /**
     * Filter the query on the first_name column
     *
     * Example usage:
     * <code>
     * $query->filterByFirstName('fooValue');   // WHERE first_name = 'fooValue'
     * $query->filterByFirstName('%fooValue%', Criteria::LIKE); // WHERE first_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $firstName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByFirstName($firstName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($firstName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_FIRST_NAME, $firstName, $comparison);
    }

    /**
     * Filter the query on the last_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLastName('fooValue');   // WHERE last_name = 'fooValue'
     * $query->filterByLastName('%fooValue%', Criteria::LIKE); // WHERE last_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lastName The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByLastName($lastName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lastName)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_LAST_NAME, $lastName, $comparison);
    }

    /**
     * Filter the query on the phone_country_code column
     *
     * Example usage:
     * <code>
     * $query->filterByPhoneCountryCode('fooValue');   // WHERE phone_country_code = 'fooValue'
     * $query->filterByPhoneCountryCode('%fooValue%', Criteria::LIKE); // WHERE phone_country_code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phoneCountryCode The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByPhoneCountryCode($phoneCountryCode = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phoneCountryCode)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_PHONE_COUNTRY_CODE, $phoneCountryCode, $comparison);
    }

    /**
     * Filter the query on the phone column
     *
     * Example usage:
     * <code>
     * $query->filterByPhone('fooValue');   // WHERE phone = 'fooValue'
     * $query->filterByPhone('%fooValue%', Criteria::LIKE); // WHERE phone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $phone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByPhone($phone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($phone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_PHONE, $phone, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%', Criteria::LIKE); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%', Criteria::LIKE); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the schedule column
     *
     * Example usage:
     * <code>
     * $query->filterBySchedule(1234); // WHERE schedule = 1234
     * $query->filterBySchedule(array(12, 34)); // WHERE schedule IN (12, 34)
     * $query->filterBySchedule(array('min' => 12)); // WHERE schedule > 12
     * </code>
     *
     * @param     mixed $schedule The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterBySchedule($schedule = null, $comparison = null)
    {
        if (is_array($schedule)) {
            $useMinMax = false;
            if (isset($schedule['min'])) {
                $this->addUsingAlias(WebinarUserTableMap::COL_SCHEDULE, $schedule['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($schedule['max'])) {
                $this->addUsingAlias(WebinarUserTableMap::COL_SCHEDULE, $schedule['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_SCHEDULE, $schedule, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('fooValue');   // WHERE date = 'fooValue'
     * $query->filterByDate('%fooValue%', Criteria::LIKE); // WHERE date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $date The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($date)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_DATE, $date, $comparison);
    }

    /**
     * Filter the query on the timezone column
     *
     * Example usage:
     * <code>
     * $query->filterByTimezone('fooValue');   // WHERE timezone = 'fooValue'
     * $query->filterByTimezone('%fooValue%', Criteria::LIKE); // WHERE timezone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $timezone The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByTimezone($timezone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($timezone)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_TIMEZONE, $timezone, $comparison);
    }

    /**
     * Filter the query on the live_room_url column
     *
     * Example usage:
     * <code>
     * $query->filterByLiveRoomUrl('fooValue');   // WHERE live_room_url = 'fooValue'
     * $query->filterByLiveRoomUrl('%fooValue%', Criteria::LIKE); // WHERE live_room_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $liveRoomUrl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByLiveRoomUrl($liveRoomUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($liveRoomUrl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_LIVE_ROOM_URL, $liveRoomUrl, $comparison);
    }

    /**
     * Filter the query on the replay_room_url column
     *
     * Example usage:
     * <code>
     * $query->filterByReplayRoomUrl('fooValue');   // WHERE replay_room_url = 'fooValue'
     * $query->filterByReplayRoomUrl('%fooValue%', Criteria::LIKE); // WHERE replay_room_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $replayRoomUrl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByReplayRoomUrl($replayRoomUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($replayRoomUrl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_REPLAY_ROOM_URL, $replayRoomUrl, $comparison);
    }

    /**
     * Filter the query on the thank_you_url column
     *
     * Example usage:
     * <code>
     * $query->filterByThankYouUrl('fooValue');   // WHERE thank_you_url = 'fooValue'
     * $query->filterByThankYouUrl('%fooValue%', Criteria::LIKE); // WHERE thank_you_url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $thankYouUrl The value to use as filter.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function filterByThankYouUrl($thankYouUrl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($thankYouUrl)) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(WebinarUserTableMap::COL_THANK_YOU_URL, $thankYouUrl, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChildWebinarUser $webinarUser Object to remove from the list of results
     *
     * @return $this|ChildWebinarUserQuery The current query, for fluid interface
     */
    public function prune($webinarUser = null)
    {
        if ($webinarUser) {
            throw new LogicException('WebinarUser object has no primary key');

        }

        return $this;
    }

    /**
     * Deletes all rows from the webinar_user table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WebinarUserTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            WebinarUserTableMap::clearInstancePool();
            WebinarUserTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(WebinarUserTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(WebinarUserTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            WebinarUserTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            WebinarUserTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

} // WebinarUserQuery
