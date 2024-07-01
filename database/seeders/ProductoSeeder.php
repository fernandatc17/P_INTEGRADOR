<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
 
        // Laptops
        Producto::create([
            'nombre' => 'Laptop Dell XPS 13',
            'descripcion' => 'Ultrabook con pantalla de 13 pulgadas y procesador Intel i7',
            'precio' => 1200,
            'stock' => 50,
            'marca' => 'Dell',
            'categoria_id' => 1,
            'imagen' => 'dell_xps_13.png',
            'especificacion' => 'Laptop Dell XPS 13 con procesador Intel Core i7-1165G7, 16GB de RAM, SSD de 512GB, pantalla táctil 13.4", resolución 1920x1200, gráficos Intel Iris Xe, Windows 10 Home'
        ]);

        Producto::create([
            'nombre' => 'MacBook Air',
            'descripcion' => 'Laptop ultraligera con procesador Apple M1',
            'precio' => 999,
            'stock' => 40,
            'marca' => 'Apple',
            'categoria_id' => 1,
            'imagen' => 'macbook_air.png',
            'especificacion' => 'MacBook Air con procesador Apple M1, 8GB de RAM, SSD de 256GB, pantalla 13.3", resolución 2560x1600, gráficos Apple GPU, macOS Big Sur.'
        ]);

        Producto::create([
            'nombre' => 'HP Spectre x360',
            'descripcion' => 'Convertible con pantalla táctil de 13 pulgadas',
            'precio' => 1100,
            'stock' => 30,
            'marca' => 'HP',
            'categoria_id' => 1,
            'imagen' => 'hp_spectre_x360.png',
            'especificacion' => 'HP Spectre x360 con procesador Intel Core i7-1165G7, 16GB de RAM, SSD de 1TB, pantalla táctil 13.3", resolución 1920x1080, gráficos Intel Iris Xe, Windows 10 Home '
        ]);

        Producto::create([
            'nombre' => 'Lenovo ThinkPad X1 Carbon',
            'descripcion' => 'Laptop empresarial de alta gama con procesador Intel i7',
            'precio' => 1400,
            'stock' => 20,
            'marca' => 'Lenovo',
            'categoria_id' => 1,
            'imagen' => 'thinkpad_x1_carbon.png',
            'especificacion' => 'Lenovo ThinkPad X1 Carbon con procesador Intel Core i7-1165G7, 16GB de RAM, SSD de 1TB, pantalla 14", resolución 1920x1080, gráficos Intel Iris Xe, Windows 10 Pro.'
        ]);

        Producto::create([
            'nombre' => 'Asus ROG Zephyrus',
            'descripcion' => 'Laptop gamer con tarjeta gráfica NVIDIA RTX 3060',
            'precio' => 1800,
            'stock' => 25,
            'marca' => 'Asus',
            'categoria_id' => 1,
            'imagen' => 'asus_rog_zephyrus.png',
            'especificacion' => 'Asus ROG Zephyrus con procesador AMD Ryzen 9 5900HS, 16GB de RAM, SSD de 1TB, pantalla 14", resolución 2560x1440, gráficos NVIDIA GeForce RTX 3070, Windows 10 Home'
        ]);

        // Componentes
        Producto::create([
            'nombre' => 'Procesador Intel i9-10900K',
            'descripcion' => 'Procesador de décima generación para alto rendimiento',
            'precio' => 500,
            'stock' => 100,
            'marca' => 'Intel',
            'categoria_id' => 2,
            'imagen' => 'intel_i9_10900k.png',
            'especificacion' => 'Procesador Intel i9-10900K con 10 núcleos, 20 hilos, frecuencia base de 3.7 GHz, turbo boost hasta 5.3 GHz, 125W de TDP, compatible con socket LGA 1200'
        ]);

        Producto::create([
            'nombre' => 'Tarjeta Madre ASUS ROG STRIX Z490-E',
            'descripcion' => 'Tarjeta madre ATX para procesadores Intel de décima generación',
            'precio' => 300,
            'stock' => 80,
            'marca' => 'ASUS',
            'categoria_id' => 2,
            'imagen' => 'asus_rog_strix_z490-e.png',
            'especificacion' => 'Tarjeta Madre ASUS ROG STRIX Z490-E con socket LGA 1200, soporte para procesadores Intel Core 10th Gen, memoria DDR4 hasta 128GB, PCIe 3.0 y 4.0, USB 3.2 Gen 2x2, Wi-Fi 6'
        ]);

        Producto::create([
            'nombre' => 'Memoria RAM Corsair Vengeance 16GB',
            'descripcion' => 'Memoria DDR4 de alto rendimiento',
            'precio' => 80,
            'stock' => 200,
            'marca' => 'Corsair',
            'categoria_id' => 2,
            'imagen' => 'corsair_vengeance_16gb.png',
            'especificacion' => 'Memoria RAM Corsair Vengeance 16GB con módulos DDR4 de 3200MHz, latencia CL16, compatible con placas base Intel y AMD, disipadores de calor anodizados'
        ]);

        Producto::create([
            'nombre' => 'Tarjeta Gráfica NVIDIA RTX 3080',
            'descripcion' => 'Tarjeta gráfica de última generación para gaming',
            'precio' => 700,
            'stock' => 60,
            'marca' => 'NVIDIA',
            'categoria_id' => 2,
            'imagen' => 'nvidia_rtx_3080.png',
            'especificacion' => 'Tarjeta Gráfica NVIDIA RTX 3080 con 10GB de GDDR6X, 8704 núcleos CUDA, reloj base de 1440 MHz, reloj boost de 1710 MHz, interfaz PCIe 4.0, HDMI 2.1 y DisplayPort 1.4a'
        ]);

        Producto::create([
            'nombre' => 'SSD Samsung 970 EVO 1TB',
            'descripcion' => 'Unidad de estado sólido NVMe para alto rendimiento',
            'precio' => 150,
            'stock' => 120,
            'marca' => 'Samsung',
            'categoria_id' => 2,
            'imagen' => 'samsung_970_evo.png',
            'especificacion' => 'SSD Samsung 970 EVO 1TB con interfaz NVMe PCIe 3.0 x4, velocidad de lectura secuencial de 3500 MB/s, velocidad de escritura secuencial de 3300 MB/s, M.2 2280.'
        ]);

        // Impresoras
        Producto::create([
            'nombre' => 'Impresora HP LaserJet Pro',
            'descripcion' => 'Impresora láser monocromática para oficina',
            'precio' => 200,
            'stock' => 40,
            'marca' => 'HP',
            'categoria_id' => 3,
            'imagen' => 'hp_laserjet_pro.png',
            'especificacion' => 'Impresora HP LaserJet Pro con tecnología laser, velocidad de impresión de 20 ppm, resolución de 1200x1200 dpi, conectividad USB 2.0 y Wi-Fi, capacidad de papelera de 250 hojas'
        ]);

        Producto::create([
            'nombre' => 'Impresora Epson EcoTank',
            'descripcion' => 'Impresora de inyección de tinta con sistema de tanque de tinta',
            'precio' => 250,
            'stock' => 50,
            'marca' => 'Epson',
            'categoria_id' => 3,
            'imagen' => 'epson_ecotank.png',
            'especificacion' => 'Impresora Epson EcoTank con sistema de tanques de tinta, velocidad de impresión de 33 ppm, resolución de 5760x1440 dpi, conectividad USB y Wi-Fi, capacidad de papelera de 250 hojas'
        ]);

        Producto::create([
            'nombre' => 'Impresora Canon PIXMA',
            'descripcion' => 'Impresora multifuncional de inyección de tinta',
            'precio' => 150,
            'stock' => 60,
            'marca' => 'Canon',
            'categoria_id' => 3,
            'imagen' => 'canon_pixma.png',
            'especificacion' => 'Impresora Canon PIXMA con tecnología inkjet, velocidad de impresión de 8.8 ppm, resolución de 4800x1200 dpi, conectividad USB y Wi-Fi, capacidad de papelera de 100 hojas'
        ]);

        Producto::create([
            'nombre' => 'Impresora Brother HL-L2350DW',
            'descripcion' => 'Impresora láser monocromática con Wi-Fi',
            'precio' => 180,
            'stock' => 30,
            'marca' => 'Brother',
            'categoria_id' => 3,
            'imagen' => 'brother_hl_l2350dw.png',
            'especificacion' => 'Impresora Brother HL-L2350DW con tecnología laser, velocidad de impresión de 30 ppm, resolución de 2400x600 dpi, conectividad USB y Wi-Fi, capacidad de papelera de 250 hojas'
        ]);

        Producto::create([
            'nombre' => 'Impresora Samsung Xpress',
            'descripcion' => 'Impresora láser a color para hogar y oficina',
            'precio' => 220,
            'stock' => 25,
            'marca' => 'Samsung',
            'categoria_id' => 3,
            'imagen' => 'samsung_xpress.png',
            'especificacion' => 'Impresora Samsung Xpress con tecnología laser, velocidad de impresión de 21 ppm, resolución de 1200x1200 dpi, conectividad USB y Wi-Fi, capacidad de papelera de 150 hojas'
        ]);

        // Periféricos
        Producto::create([
            'nombre' => 'Teclado Mecánico Corsair K95',
            'descripcion' => 'Teclado mecánico RGB con teclas programables',
            'precio' => 200,
            'stock' => 70,
            'marca' => 'Corsair',
            'categoria_id' => 4,
            'imagen' => 'corsair_k95.png',
            'especificacion' => 'Teclado Mecánico Corsair K95 con switches Cherry MX RGB, iluminación RGB, 104 teclas, teclado numérico, 6 teclas macro dedicadas, conectividad USB y USB passthrough.'
        ]);

        Producto::create([
            'nombre' => 'Ratón Logitech MX Master 3',
            'descripcion' => 'Ratón inalámbrico ergonómico con múltiples botones',
            'precio' => 100,
            'stock' => 80,
            'marca' => 'Logitech',
            'categoria_id' => 4,
            'imagen' => 'logitech_mx_master_3.png',
            'especificacion' => 'Ratón Logitech MX Master 3 con sensor Darkfield de 4000 DPI, 7 botones programables, rueda de desplazamiento MagSpeed, conectividad Bluetooth y USB, batería de hasta 70 días.'
        ]);

        Producto::create([
            'nombre' => 'Monitor Dell UltraSharp 27"',
            'descripcion' => 'Monitor 4K con alta precisión de color',
            'precio' => 500,
            'stock' => 50,
            'marca' => 'Dell',
            'categoria_id' => 4,
            'imagen' => 'dell_ultrasharp_27.png',
            'especificacion' =>'Monitor Dell UltraSharp 27" con resolución 2560x1440, panel IPS, tiempo de respuesta de 6 ms, conectividad HDMI, DisplayPort y USB-C, ajustes de altura y giro.'
        ]);

        Producto::create([
            'nombre' => 'Auriculares HyperX Cloud II',
            'descripcion' => 'Auriculares gaming con sonido envolvente 7.1',
            'precio' => 100,
            'stock' => 60,
            'marca' => 'HyperX',
            'categoria_id' => 4,
            'imagen' => 'hyperx_cloud_ii.png',
            'especificacion' => 'Auriculares HyperX Cloud II con diadema ajustable, almohadillas de memoria foam, sonido 7.1 virtual, micrófono con cancelación de ruido, conectividad USB y 3.5mm.'
        ]);

        Producto::create([
            'nombre' => 'Webcam Logitech C920',
            'descripcion' => 'Webcam Full HD con micrófono integrado',
            'precio' => 80,
            'stock' => 90,
            'marca' => 'Logitech',
            'categoria_id' => 4,
            'imagen' => 'logitech_c920.png',
            'especificacion' => 'Webcam Logitech C920 con resolución 1080p a 30 fps, autofocus, micrófonos estéreo, conectividad USB 3.0, compatible con Skype, Zoom y otras plataformas de videoconferencia.'
        ]);

        // Store
        Producto::create([
            'nombre' => 'Disco Duro Externo Seagate 2TB',
            'descripcion' => 'Disco duro externo portátil USB 3.0',
            'precio' => 70,
            'stock' => 150,
            'marca' => 'Seagate',
            'categoria_id' => 5,
            'imagen' => 'seagate_2tb.png',
            'especificacion' => 'Disco Duro Externo Seagate 2TB con interfaz USB 3.0, velocidad de transferencia de hasta 120 MB/s, diseño resistente, compatible con Windows y Mac.'
        ]);

        Producto::create([
            'nombre' => 'SSD Externo Samsung T5 1TB',
            'descripcion' => 'SSD portátil con conexión USB-C',
            'precio' => 150,
            'stock' => 100,
            'marca' => 'Samsung',
            'categoria_id' => 5,
            'imagen' => 'samsung_t5_1tb.png',
            'especificacion' => 'SSD Externo Samsung T5 1TB con interfaz USB 3.1 Gen 2, velocidad de lectura de 540 MB/s, velocidad de escritura de 520 MB/s, diseño compacto y resistente, compatible con Windows, Mac y Android.'
        ]);

        Producto::create([
            'nombre' => 'Memoria USB Kingston 64GB',
            'descripcion' => 'Memoria USB 3.0 de alta velocidad',
            'precio' => 20,
            'stock' => 200,
            'marca' => 'Kingston',
            'categoria_id' => 5,
            'imagen' => 'kingston_64gb.png',
            'especificacion' => 'Memoria USB Kingston 64GB con interfaz USB 3.2 Gen 1, velocidad de lectura de 100 MB/s, velocidad de escritura de 40 MB/s, diseño resistente, compatible con Windows, Mac y Linux.'
        ]);

        Producto::create([
            'nombre' => 'Tarjeta SD SanDisk 128GB',
            'descripcion' => 'Tarjeta de memoria SDXC para cámaras y dispositivos móviles',
            'precio' => 30,
            'stock' => 180,
            'marca' => 'SanDisk',
            'categoria_id' => 5,
            'imagen' => 'sandisk_128gb.png',
            'especificacion' => 'Tarjeta SD SanDisk 128GB con clase de velocidad U3, velocidad de lectura de 100 MB/s, velocidad de escritura de 90 MB/s, compatible con cámaras y dispositivos con ranura SD.'
        ]);

        Producto::create([
            'nombre' => 'NAS Synology DS220+',
            'descripcion' => 'Sistema de almacenamiento en red de 2 bahías',
            'precio' => 300,
            'stock' => 50,
            'marca' => 'Synology',
            'categoria_id' => 5,
            'imagen' => 'synology_ds220.png',
            'especificacion' => 'NAS Synology DS220+ con procesador Intel Celeron J4025, 2GB de RAM, capacidad de expansión de 2 discos, interfaz Gigabit Ethernet, soporte para RAID 0, 1 y JBOD, sistema operativo DSM.'
        ]);

        // Redes
        Producto::create([
            'nombre' => 'Router TP-Link Archer AX6000',
            'descripcion' => 'Router Wi-Fi 6 con alta velocidad y cobertura',
            'precio' => 200,
            'stock' => 60,
            'marca' => 'TP-Link',
            'categoria_id' => 6,
            'imagen' => 'tplink_archer_ax6000.png',
            'especificacion' => 'Router TP-Link Archer AX6000 con tecnología Wi-Fi 6, velocidad de hasta 6000 Mbps, 8 antenas externas, 1.5GHz de CPU, 4 puertos Gigabit Ethernet, 1 puerto WAN/LAN 2.5G, MU-MIMO y OFDMA.'
        ]);

        Producto::create([
            'nombre' => 'Switch Netgear GS108',
            'descripcion' => 'Switch Ethernet de 8 puertos Gigabit',
            'precio' => 40,
            'stock' => 90,
            'marca' => 'Netgear',
            'categoria_id' => 6,
            'imagen' => 'netgear_gs108.png',
            'especificacion' => 'Switch Netgear GS108 con 8 puertos Gigabit Ethernet, velocidad de 2000 Mbps, sin bloqueo, diseño sin ventilador, gestión de energía IEEE 802.3az, compatible con VLAN y QoS.'
        ]);

        Producto::create([
            'nombre' => 'Cable Ethernet Cat 6 10m',
            'descripcion' => 'Cable de red Cat 6 para alta velocidad',
            'precio' => 10,
            'stock' => 300,
            'marca' => 'Generic',
            'categoria_id' => 6,
            'imagen' => 'ethernet_cat6_10m.png',
            'especificacion' => 'Cable Ethernet Cat 6 10m con conectores RJ45, velocidad de hasta 10 Gbps, frecuencia de hasta 250 MHz, diseño resistente, compatible con redes Ethernet 10/100/1000/10GBASE-T.'
        ]);

        Producto::create([
            'nombre' => 'Adaptador Wi-Fi USB TP-Link AC600',
            'descripcion' => 'Adaptador Wi-Fi USB para mejorar la conexión inalámbrica',
            'precio' => 20,
            'stock' => 100,
            'marca' => 'TP-Link',
            'categoria_id' => 6,
            'imagen' => 'tplink_ac600.png',
            'especificacion' => 'Adaptador Wi-Fi USB TP-Link AC600 con velocidad de hasta 300 Mbps en 2.4GHz y 300 Mbps en 5GHz, compatibilidad con Windows, Mac y Linux, antena omnidireccional.'
        ]);

        Producto::create([
            'nombre' => 'Extensor de Red TP-Link RE450',
            'descripcion' => 'Extensor de cobertura Wi-Fi con doble banda',
            'precio' => 50,
            'stock' => 80,
            'marca' => 'TP-Link',
            'categoria_id' => 6,
            'imagen' => 'tplink_re450.png',
            'especificacion' => 'Extensor de Red TP-Link RE450 con tecnología Wi-Fi 5, velocidad de hasta 1750 Mbps, 4 antenas externas, compatibilidad con WPS, Ethernet passthrough, gestión de energía ECO.'
        ]);

    }
}
