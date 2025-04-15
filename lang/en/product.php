<?php

return [
    'title' => 'Product Details - Karate Apparel Store',

    // Inventory Status
    'availability' => 'In Stock', // 更专业的库存状态表述
    'sales_volume' => 'Units Sold', // 强化销售数据维度
    'customer_ratings' => 'Customer Reviews', // 符合电商标准表述
    'wishlist' => 'Add to Wishlist', // 解决键名冲突并明确功能
    'product_description' => 'Product Overview',
    'key_features' => 'Technical Specifications', // 突出产品专业属性

    // Pricing & Ordering
    'pricing' => 'Pricing',
    'inventory_status' => 'Stock Level', // 库存状态独立模块
    'qty_selector' => 'Qty', // 符合电商标准缩写
    'instant_checkout' => 'Buy Now',
    'add_to_cart' => 'Add to Cart',

    // Product Specifications
    'tech_specs' => 'Product Specifications',

    // Payment Interface
    'payment_modal' => [
        'header' => 'Secure Payment', // 强调支付安全性
        'qr_interface' => 'Scan QR Code',
        'warning_content' => 'DEMO ENVIRONMENT - Do not process real transactions',
        'payment_options' => 'Supported Methods: WeChat Pay | Alipay',
        'display_price' => 'Total: ¥299.00', // 价格格式化
        'shipping_notice' => 'Orders ship within 24hrs of payment verification' // 明确物流时效
    ],
];
