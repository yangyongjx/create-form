<?php


namespace Magein\createForm\library\constant;


class FormErrorConstant extends Constant
{
    const REGISTER_CLASS_ILLEGAL = 100001;

    const REGISTER_CLASS_NOT_FOUND = 100002;

    const FORM_CONFIG_DECODE_FAIL = 100010;

    const FORM_CONFIG_FORMAT_ERROR = 100011;

    const FORM_CONFIG_OPTIONS_ERROR = 100012;

    const FORM_CONFIG_OPTIONS_FORMAT_ERROR = 100013;

    const FORM_CONFIG_OPTIONS_NAME_NOT_UNIQUE = 100014;

    const FORM_CONFIG_LENGTH_PARAM_ERROR = 100015;

    const FORM_DATA_REQUIRED = 100101;

    const FORM_DATA_LENGTH_ERROR = 100102;

    const FORM_DATA_IS_ARRAY = 100103;

    const FORM_DATA_IS_STRING = 100104;

    const FORM_DATA_NOT_MATCH = 100105;
}