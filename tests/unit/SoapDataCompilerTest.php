<?php
namespace NamelessCoder\TYPO3RepositoryClient\tests\unit;

/**
 * Class SoapDataCompilerTest
 */
class SoapDataCompilerTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @param string $username
     * @param string $password
     * @param array $data
     * @param array $expectation
     * @dataProvider getCreateSoapDataTestValues
     */
    public function testCreateSoapData($username, $password, $data, $expectation)
    {
    }

    /**
     * @return array
     */
    public function getCreateSoapDataTestValues()
    {
        return [
            [
                'user',
                'pass',
                ['foo' => 'bar'],
                ['foo' => 'bar', 'accountData' => ['username' => 'user', 'password' => 'pass']]
            ],
            [
                'user',
                'pass',
                ['foo' => 'bar', 'accountData' => ['username' => 'user2', 'password' => 'pass2']],
                ['foo' => 'bar', 'accountData' => ['username' => 'user2', 'password' => 'pass2']]
            ],
        ];
    }
}
