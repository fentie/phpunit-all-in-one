--TEST--
phpunit-skelgen --class -- BankAccountTest _fixture/BankAccountTest.php BankAccount php://stdout
--FILE--
<?php
$_SERVER['argv'][1] = '--class';
$_SERVER['argv'][2] = '--';
$_SERVER['argv'][3] = 'BankAccountTest';
$_SERVER['argv'][4] = dirname(__FILE__) . DIRECTORY_SEPARATOR . '_fixture' . DIRECTORY_SEPARATOR . 'BankAccountTest.php';
$_SERVER['argv'][5] = 'BankAccount';
$_SERVER['argv'][6] = 'php://stdout';

require_once dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'PHPUnit' . DIRECTORY_SEPARATOR . 'SkeletonGenerator' . DIRECTORY_SEPARATOR . 'Autoload.php';
PHPUnit_SkeletonGenerator_TextUI_Command::main();
?>
--EXPECTF--
PHPUnit Skeleton Generator %s by Sebastian Bergmann.

<?php
/**
 * Generated by PHPUnit_SkeletonGenerator on %s at %s.
 */
class BankAccount
{
    /**
     * @todo Implement depositMoney().
     */
    public function depositMoney()
    {
        // Remove the following line when you implement this method.
        throw new RuntimeException('Not yet implemented.');
    }

    /**
     * @todo Implement getBalance().
     */
    public function getBalance()
    {
        // Remove the following line when you implement this method.
        throw new RuntimeException('Not yet implemented.');
    }

    /**
     * @todo Implement withdrawMoney().
     */
    public function withdrawMoney()
    {
        // Remove the following line when you implement this method.
        throw new RuntimeException('Not yet implemented.');
    }
}
Wrote skeleton for "BankAccount" to "php://stdout".
