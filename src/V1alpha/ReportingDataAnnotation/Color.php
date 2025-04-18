<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace Google\Analytics\Admin\V1alpha\ReportingDataAnnotation;

use UnexpectedValueException;

/**
 * Colors that may be used for this Reporting Data Annotation
 *
 * Protobuf type <code>google.analytics.admin.v1alpha.ReportingDataAnnotation.Color</code>
 */
class Color
{
    /**
     * Color unknown or not specified.
     *
     * Generated from protobuf enum <code>COLOR_UNSPECIFIED = 0;</code>
     */
    const COLOR_UNSPECIFIED = 0;
    /**
     * Purple color.
     *
     * Generated from protobuf enum <code>PURPLE = 1;</code>
     */
    const PURPLE = 1;
    /**
     * Brown color.
     *
     * Generated from protobuf enum <code>BROWN = 2;</code>
     */
    const BROWN = 2;
    /**
     * Blue color.
     *
     * Generated from protobuf enum <code>BLUE = 3;</code>
     */
    const BLUE = 3;
    /**
     * Green color.
     *
     * Generated from protobuf enum <code>GREEN = 4;</code>
     */
    const GREEN = 4;
    /**
     * Red color.
     *
     * Generated from protobuf enum <code>RED = 5;</code>
     */
    const RED = 5;
    /**
     * Cyan color.
     *
     * Generated from protobuf enum <code>CYAN = 6;</code>
     */
    const CYAN = 6;
    /**
     * Orange color. (Only used for system-generated annotations)
     *
     * Generated from protobuf enum <code>ORANGE = 7;</code>
     */
    const ORANGE = 7;

    private static $valueToName = [
        self::COLOR_UNSPECIFIED => 'COLOR_UNSPECIFIED',
        self::PURPLE => 'PURPLE',
        self::BROWN => 'BROWN',
        self::BLUE => 'BLUE',
        self::GREEN => 'GREEN',
        self::RED => 'RED',
        self::CYAN => 'CYAN',
        self::ORANGE => 'ORANGE',
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


