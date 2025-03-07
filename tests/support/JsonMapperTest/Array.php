<?php
/**
 * Unit test helper class for testing property mapping
 *
 * @package  JsonMapper
 * @author   Christian Weiske <cweiske@cweiske.de>
 * @license  OSL-3.0 http://opensource.org/licenses/osl-3.0
 * @link     http://cweiske.de/
 */
class JsonMapperTest_Array
{
    /**
     * @var float[]
     */
    public $flArray;

    /**
     * @var array<string>
     */
    public $strArray;

    /**
     * @var array[string]
     */
    public $strArrayV2;

    /**
     * @var array[string|null]
     */
    public $strMaybeNullArray;

    /**
     * @var array[?string]
     */
    public $strMaybeNullArrayV2;

    /**
     * @var JsonMapperTest_Simple[]
     * @see http://phpdoc.org/docs/latest/references/phpdoc/types.html#arrays
     */
    public $typedArray;

    /**
     * @var DateTime[]
     */
    public $typedSimpleArray;

    /**
     * @var string[]|null
     */
    public $nullableSimpleArray;

    /**
     * This generates an array object with original json values
     * @var ArrayObject
     */
    public $pArrayObject;

    /**
     * This generates an array object with original json values,
     * and may be NULL
     * @var ArrayObject|null
     */
    public $pNullableArrayObject;

    /**
     * This generates an array object with JsonMapperTest_Simple instances
     * @var ArrayObject[JsonMapperTest_Simple]
     */
    public $pTypedArrayObject;

    /**
     * @var ArrayObject[int]
     */
    public $pSimpleArrayObject;

    /**
     * Array of ArrayObject instances
     * @var ArrayObject[]
     */
    public $pArrayObjectList;

    /**
     * @var JsonMapperTest_ArrayAccessObject
     */
    public $pArrayAccessObject;

    /**
     * @var JsonMapperTest_ArrayAccessCollection
     */
    public $pArrayAccessCollection;

    /**
     * Array of ArrayObject instances
     * @var \namespacetest\model\MyArrayObject[]
     */
    public $pArrayObjectSubclassList;

    /**
     * 2D matrix of numbers
     * @var int[][]
     */
    public $nMatrix;

    /**
     * 3D matrix of objects
     * @var JsonMapperTest_Simple[][][]
     */
    public $pMultiverse;
}
?>
