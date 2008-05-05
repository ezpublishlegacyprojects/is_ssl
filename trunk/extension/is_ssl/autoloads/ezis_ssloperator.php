<?php

class eZIsSSLOperator
{
    function eZIsSSLOperator()
    {
    }

    function operatorList()
    {
        return array( 'is_ssl' );
    }

    function namedParameterPerOperator()
    {
        return false;
    }    
    
    function namedParameterList()
    {
        return false;
    }

    function modify( &$tpl, &$operatorName, &$operatorParameters, &$rootNamespace, &$currentNamespace, &$operatorValue, &$namedParameters )
    {
        switch ( $operatorName )
        {
            case 'is_ssl':
            {
                $operatorValue = eZSys::isSSLNow();
            } break;
        }
    }
}

?>