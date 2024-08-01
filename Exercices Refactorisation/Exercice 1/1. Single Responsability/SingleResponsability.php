<?php

// TODO refactoriser le code pour respecter le principe Single Responsability de la programmation SOLID


class NoBalanceAvailableException extends \Exception
{
}

class Product
{
    private $value;

    public function getValue()
    {
        return $this->value;
    }
}

class Account
{
    private $balance;

    public function getBalance()
    {
        return $this->balance;
    }

    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function debit($amount)
    {
        if ($this->balance < $amount) {
            throw new NoBalanceAvailableException();
        }
        $this->balance -= $amount;
    }

    public function haveBalanceAvailable($amount)
    {
        return $this->balance >= $amount;
    }
}

class Customer
{
    private $account;

    public function getAccount()
    {
        return $this->account;
    }

    public function setAccount(Account $account)
    {
        $this->account = $account;
    }
}

class ProductCalculator
{
    /**
     * @param Product[] $products
     * @return float
     */
    public function calculateTotalValue(array $products)
    {
        $value = 0;

        foreach ($products as $product) {
            $value += $product->getValue();
        }

        return $value;
    }
}

class Sale
{
    public function sell(array $products, Customer $customer, ProductCalculator $productCalculator)
    {
        $value = $productCalculator->calculateTotalValue($products);
        
        $customer->getAccount()->debit($value);
    }
}
