# Magento Salesperson

This is a simple extension which logs the Magento user ID and username of the admin user who creates an order in the back-end of the system.

It does not affect orders placed directly by customers.

The data is stored in the `sales_flat_order` table and displayed on a new 'Salesperson' tab on the order screen in the Magento admin interface.

It is [modman](https://github.com/colinmollenhour/modman) compatible and, so far, tested only on 1.7.0.2, but it doesn't do anything fancy, so I expect it'll work more broadly.
