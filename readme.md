
## Propose of the application

Build a small (micro)service that calculates discounts for orders.

There are three possible ways of getting a discount:

- A customer who has already bought for over € 1000, gets a discount of 10% on the whole order.
- For every products of category "Switches" (id 2), when you buy five, you get a sixth for free.
- If you buy two or more products of category "Tools" (id 1), you get a 20% discount on the cheapest product.



## Running the application


On the root of the project, run the command **php artisan serve**, to run the server. Then access http://localhost:8000/orders/ to call the service. In this case, for test purposes, use http://localhost:8000/orders/3, to use the test data provided.



## Important Files

**app/Classes/Discounts.php** -> Implementation of the diferent discounts, that change the order, if the conditions are met.
**app/Classes/DiscountsManager.php** -> Class that iterates through all the diferent discounts and returns the final data of the order.
**app/Classes/Error.php** ->  Class Error
**app/Classes/IDiscount.php** -> Interface for Discounts. Permits the creation of new types of discount.
**app/Classes/IRepository.php** -> Interface for Order Repositories. Permits the creation of different types of repositories, not just the one implemented (OrdersRepository).
**app/Classes/OrdersRepository.php** -> Class for the orders. In this case, for testing purposes, it gets the data by accessing a file hardcoded. Since it implements IRepository, diferent implementations can be created, to improve the app, if needed.


**app/Http/Controllers/OrdersController.php** -> controller for the orders, to provide the returning JSON.



## Unit Tests

Location of the file:
tests/Features/DiscountsTest.php


To run the tests, run the command **phpunit** on the root of the project.