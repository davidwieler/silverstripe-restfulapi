<?php

namespace Colymba\RESTfulAPI\Tests\Fixtures;

use SilverStripe\ORM\DataObject;
use Colymba\RESTfulAPI\Tests\Fixtures\ApiTestBook;




/**
 * RESTfulAPI Test suite DataObjects
 *
 * @author  Thierry Francois @colymba thierry@colymba.com
 * @copyright Copyright (c) 2013, Thierry Francois
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD Simplified
 *
 * @package RESTfulAPI
 * @subpackage Tests
 */

class ApiTestAuthor extends DataObject
{
    private static $table_name = 'ApiTestAuthor';

    private static $db = array(
        'Name' => 'Varchar(255)',
        'IsMan' => 'Boolean',
    );

    private static $has_many = array(
        'Books' => ApiTestBook::class,
    );
}
