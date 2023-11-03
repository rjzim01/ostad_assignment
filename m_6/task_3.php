<?php

"SELECT 
    c.name AS category_name, SUM(p.price * oi.quantity) as total_revenue
FROM 
    categories c
JOIN 
    products p ON c.category_id = p.category_id
JOIN 
    order_items oi ON p.product_id = oi.product_id
GROUP BY 
    c.name
ORDER BY 
    total_revenue DESC;"

    ?>