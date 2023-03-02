<?php

// Identificador de su tienda
PaymentModel::setDefaultShopId(" ******** ");

// Clave de TEST y Producción de su Back Office Vendedor.
PaymentModel::setDefaultTestKey("********");
PaymentModel::setDefaultProdKey("********");

// URL de la plataforma de pago
PaymentModel::setDefaultUrlPayment("https://secure.micuentaweb.pe/vads-payment/entry.silentInit.a");

// Modo de Configuración
PaymentModel::setDefaultMode("TEST");