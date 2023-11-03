<?php

"SELECT 
    o.order_id, p.name AS product_name, oi.quantity, (oi.quantity * p.price) as total_amount
FROM 
    order_items oi
JOIN 
    products p ON oi.product_id = p.product_id
JOIN 
    orders o ON oi.order_id = o.order_id
ORDER BY 
    o.order_id ASC;"

    ?>