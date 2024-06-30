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
            'especificacion' => '8GB RAM, 256GB SSD, Windows 10'
        ]);

        Producto::create([
            'nombre' => 'MacBook Air',
            'descripcion' => 'Laptop ultraligera con procesador Apple M1',
            'precio' => 999,
            'stock' => 40,
            'marca' => 'Apple',
            'categoria_id' => 1,
            'imagen' => 'macbook_air.png',
            'especificacion' => '8GB RAM, 256GB SSD, macOS Big Sur'
        ]);

        Producto::create([
            'nombre' => 'HP Spectre x360',
            'descripcion' => 'Convertible con pantalla táctil de 13 pulgadas',
            'precio' => 1100,
            'stock' => 30,
            'marca' => 'HP',
            'categoria_id' => 1,
            'imagen' => 'hp_spectre_x360.png',
            'especificacion' => '16GB RAM, 512GB SSD, Windows 10'
        ]);

        Producto::create([
            'nombre' => 'Lenovo ThinkPad X1 Carbon',
            'descripcion' => 'Laptop empresarial de alta gama con procesador Intel i7',
            'precio' => 1400,
            'stock' => 20,
            'marca' => 'Lenovo',
            'categoria_id' => 1,
            'imagen' => 'thinkpad_x1_carbon.png',
            'especificacion' => '16GB RAM, 512GB SSD, Windows 10 Pro'
        ]);

        Producto::create([
            'nombre' => 'Asus ROG Zephyrus',
            'descripcion' => 'Laptop gamer con tarjeta gráfica NVIDIA RTX 3060',
            'precio' => 1800,
            'stock' => 25,
            'marca' => 'Asus',
            'categoria_id' => 1,
            'imagen' => 'asus_rog_zephyrus.png',
            'especificacion' => '16GB RAM, 1TB SSD, Windows 10'
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
            'especificacion' => '10 núcleos, 3.7GHz'
        ]);

        Producto::create([
            'nombre' => 'Tarjeta Madre ASUS ROG STRIX Z490-E',
            'descripcion' => 'Tarjeta madre ATX para procesadores Intel de décima generación',
            'precio' => 300,
            'stock' => 80,
            'marca' => 'ASUS',
            'categoria_id' => 2,
            'imagen' => 'asus_rog_strix_z490-e.png',
            'especificacion' => 'Soporta DDR4, PCIe 3.0'
        ]);

        Producto::create([
            'nombre' => 'Memoria RAM Corsair Vengeance 16GB',
            'descripcion' => 'Memoria DDR4 de alto rendimiento',
            'precio' => 80,
            'stock' => 200,
            'marca' => 'Corsair',
            'categoria_id' => 2,
            'imagen' => 'corsair_vengeance_16gb.png',
            'especificacion' => '3200MHz, CL16'
        ]);

        Producto::create([
            'nombre' => 'Tarjeta Gráfica NVIDIA RTX 3080',
            'descripcion' => 'Tarjeta gráfica de última generación para gaming',
            'precio' => 700,
            'stock' => 60,
            'marca' => 'NVIDIA',
            'categoria_id' => 2,
            'imagen' => 'nvidia_rtx_3080.png',
            'especificacion' => '10GB GDDR6X'
        ]);

        Producto::create([
            'nombre' => 'SSD Samsung 970 EVO 1TB',
            'descripcion' => 'Unidad de estado sólido NVMe para alto rendimiento',
            'precio' => 150,
            'stock' => 120,
            'marca' => 'Samsung',
            'categoria_id' => 2,
            'imagen' => 'samsung_970_evo.png',
            'especificacion' => '3500MB/s lectura, 2500MB/s escritura'
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
            'especificacion' => '600 dpi, 30 ppm'
        ]);

        Producto::create([
            'nombre' => 'Impresora Epson EcoTank',
            'descripcion' => 'Impresora de inyección de tinta con sistema de tanque de tinta',
            'precio' => 250,
            'stock' => 50,
            'marca' => 'Epson',
            'categoria_id' => 3,
            'imagen' => 'epson_ecotank.png',
            'especificacion' => '4800 dpi, Wi-Fi'
        ]);

        Producto::create([
            'nombre' => 'Impresora Canon PIXMA',
            'descripcion' => 'Impresora multifuncional de inyección de tinta',
            'precio' => 150,
            'stock' => 60,
            'marca' => 'Canon',
            'categoria_id' => 3,
            'imagen' => 'canon_pixma.png',
            'especificacion' => '4800 dpi, Escáner y Copiadora'
        ]);

        Producto::create([
            'nombre' => 'Impresora Brother HL-L2350DW',
            'descripcion' => 'Impresora láser monocromática con Wi-Fi',
            'precio' => 180,
            'stock' => 30,
            'marca' => 'Brother',
            'categoria_id' => 3,
            'imagen' => 'brother_hl_l2350dw.png',
            'especificacion' => '1200 dpi, 32 ppm'
        ]);

        Producto::create([
            'nombre' => 'Impresora Samsung Xpress',
            'descripcion' => 'Impresora láser a color para hogar y oficina',
            'precio' => 220,
            'stock' => 25,
            'marca' => 'Samsung',
            'categoria_id' => 3,
            'imagen' => 'samsung_xpress.png',
            'especificacion' => '2400 dpi, Wi-Fi'
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
            'especificacion' => 'Cherry MX, Iluminación RGB'
        ]);

        Producto::create([
            'nombre' => 'Ratón Logitech MX Master 3',
            'descripcion' => 'Ratón inalámbrico ergonómico con múltiples botones',
            'precio' => 100,
            'stock' => 80,
            'marca' => 'Logitech',
            'categoria_id' => 4,
            'imagen' => 'logitech_mx_master_3.png',
            'especificacion' => '4000 DPI, Bluetooth y USB'
        ]);

        Producto::create([
            'nombre' => 'Monitor Dell UltraSharp 27"',
            'descripcion' => 'Monitor 4K con alta precisión de color',
            'precio' => 500,
            'stock' => 50,
            'marca' => 'Dell',
            'categoria_id' => 4,
            'imagen' => 'dell_ultrasharp_27.png',
            'especificacion' => '3840x2160, IPS'
        ]);

        Producto::create([
            'nombre' => 'Auriculares HyperX Cloud II',
            'descripcion' => 'Auriculares gaming con sonido envolvente 7.1',
            'precio' => 100,
            'stock' => 60,
            'marca' => 'HyperX',
            'categoria_id' => 4,
            'imagen' => 'hyperx_cloud_ii.png',
            'especificacion' => 'Sonido 7.1, Micrófono desmontable'
        ]);

        Producto::create([
            'nombre' => 'Webcam Logitech C920',
            'descripcion' => 'Webcam Full HD con micrófono integrado',
            'precio' => 80,
            'stock' => 90,
            'marca' => 'Logitech',
            'categoria_id' => 4,
            'imagen' => 'logitech_c920.png',
            'especificacion' => '1080p, Micrófono estéreo'
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
            'especificacion' => '2TB, USB 3.0'
        ]);

        Producto::create([
            'nombre' => 'SSD Externo Samsung T5 1TB',
            'descripcion' => 'SSD portátil con conexión USB-C',
            'precio' => 150,
            'stock' => 100,
            'marca' => 'Samsung',
            'categoria_id' => 5,
            'imagen' => 'samsung_t5_1tb.png',
            'especificacion' => '1TB, USB 3.1'
        ]);

        Producto::create([
            'nombre' => 'Memoria USB Kingston 64GB',
            'descripcion' => 'Memoria USB 3.0 de alta velocidad',
            'precio' => 20,
            'stock' => 200,
            'marca' => 'Kingston',
            'categoria_id' => 5,
            'imagen' => 'kingston_64gb.png',
            'especificacion' => '64GB, USB 3.0'
        ]);

        Producto::create([
            'nombre' => 'Tarjeta SD SanDisk 128GB',
            'descripcion' => 'Tarjeta de memoria SDXC para cámaras y dispositivos móviles',
            'precio' => 30,
            'stock' => 180,
            'marca' => 'SanDisk',
            'categoria_id' => 5,
            'imagen' => 'sandisk_128gb.png',
            'especificacion' => '128GB, UHS-I'
        ]);

        Producto::create([
            'nombre' => 'NAS Synology DS220+',
            'descripcion' => 'Sistema de almacenamiento en red de 2 bahías',
            'precio' => 300,
            'stock' => 50,
            'marca' => 'Synology',
            'categoria_id' => 5,
            'imagen' => 'synology_ds220.png',
            'especificacion' => '2 bahías, 1GB RAM, Gigabit Ethernet'
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
            'especificacion' => 'Wi-Fi 6, 8 antenas, 2.5 Gbps'
        ]);

        Producto::create([
            'nombre' => 'Switch Netgear GS108',
            'descripcion' => 'Switch Ethernet de 8 puertos Gigabit',
            'precio' => 40,
            'stock' => 90,
            'marca' => 'Netgear',
            'categoria_id' => 6,
            'imagen' => 'netgear_gs108.png',
            'especificacion' => '8 puertos Gigabit, Plug and Play'
        ]);

        Producto::create([
            'nombre' => 'Cable Ethernet Cat 6 10m',
            'descripcion' => 'Cable de red Cat 6 para alta velocidad',
            'precio' => 10,
            'stock' => 300,
            'marca' => 'Generic',
            'categoria_id' => 6,
            'imagen' => 'ethernet_cat6_10m.png',
            'especificacion' => '10 metros, UTP, Cat 6'
        ]);

        Producto::create([
            'nombre' => 'Adaptador Wi-Fi USB TP-Link AC600',
            'descripcion' => 'Adaptador Wi-Fi USB para mejorar la conexión inalámbrica',
            'precio' => 20,
            'stock' => 100,
            'marca' => 'TP-Link',
            'categoria_id' => 6,
            'imagen' => 'tplink_ac600.png',
            'especificacion' => 'Dual Band, USB 2.0'
        ]);

        Producto::create([
            'nombre' => 'Extensor de Red TP-Link RE450',
            'descripcion' => 'Extensor de cobertura Wi-Fi con doble banda',
            'precio' => 50,
            'stock' => 80,
            'marca' => 'TP-Link',
            'categoria_id' => 6,
            'imagen' => 'tplink_re450.png',
            'especificacion' => 'AC1750, 3 antenas'
        ]);

    }
}
