<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/resources.proto

namespace Google\Analytics\Admin\V1beta\DataRetentionSettings;

use UnexpectedValueException;

/**
 * Valid values for the data retention duration.
 *
 * Protobuf type <code>google.analytics.admin.v1beta.DataRetentionSettings.RetentionDuration</code>
 */
class RetentionDuration
{
    /**
     * Data retention time duration is not specified.
     *
     * Generated from protobuf enum <code>RETENTION_DURATION_UNSPECIFIED = 0;</code>
     */
    const RETENTION_DURATION_UNSPECIFIED = 0;
    /**
     * The data retention time duration is 2 months.
     *
     * Generated from protobuf enum <code>TWO_MONTHS = 1;</code>
     */
    const TWO_MONTHS = 1;
    /**
     * The data retention time duration is 14 months.
     *
     * Generated from protobuf enum <code>FOURTEEN_MONTHS = 3;</code>
     */
    const FOURTEEN_MONTHS = 3;
    /**
     * The data retention time duration is 26 months.
     * Available to 360 properties only.
     *
     * Generated from protobuf enum <code>TWENTY_SIX_MONTHS = 4;</code>
     */
    const TWENTY_SIX_MONTHS = 4;
    /**
     * The data retention time duration is 38 months.
     * Available to 360 properties only.
     *
     * Generated from protobuf enum <code>THIRTY_EIGHT_MONTHS = 5;</code>
     */
    const THIRTY_EIGHT_MONTHS = 5;
    /**
     * The data retention time duration is 50 months.
     * Available to 360 properties only.
     *
     * Generated from protobuf enum <code>FIFTY_MONTHS = 6;</code>
     */
    const FIFTY_MONTHS = 6;

    private static $valueToName = [
        self::RETENTION_DURATION_UNSPECIFIED => 'RETENTION_DURATION_UNSPECIFIED',
        self::TWO_MONTHS => 'TWO_MONTHS',
        self::FOURTEEN_MONTHS => 'FOURTEEN_MONTHS',
        self::TWENTY_SIX_MONTHS => 'TWENTY_SIX_MONTHS',
        self::THIRTY_EIGHT_MONTHS => 'THIRTY_EIGHT_MONTHS',
        self::FIFTY_MONTHS => 'FIFTY_MONTHS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


