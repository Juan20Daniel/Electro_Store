function irAlTexto() {
    var texto = document.getElementById('inputSearch').value;
    if(texto == ""){
        window.history.go();
    }else{
        var sentence = 'televisores';
        sentence = sentence.toLowerCase();
        if(sentence.includes(texto.toLowerCase())){
            window.location = "tele.php";
        }else{
            var sentence = 'laptops';
            sentence = sentence.toLowerCase();
            if(sentence.includes(texto.toLowerCase())){
                window.location = "laptop.php";
            }else{
                var sentence = 'teléfonos';
                sentence = sentence.toLowerCase();
                if(sentence.includes(texto.toLowerCase())){
                    window.location = "phone.php";
                }else{
                    var sentence = 'relojes';
                    sentence = sentence.toLowerCase();
                    if(sentence.includes(texto.toLowerCase())){
                        window.location = "relojs.php";
                    }else{
                        var sentence = 'audífonos';
                        sentence = sentence.toLowerCase();
                        if(sentence.includes(texto.toLowerCase())){
                            window.location = "audif.php";
                        }else{
                            var sentence = 'smart TV 4K Crystal UHD TU8500. Sumérgete en la imagen con una gama de colores más amplia. '+ 
                            'Dynamic Crystal Display ofrece tonalidades realistas para que puedas apreciar cada sutileza. '+ 
                            '¡Selecciona el tamaño de pulgadas preferido!'+
                            'Pantalla de 70 pulgadas Resolución 7680 x 4320 píxeles '+
                            'Costo $ 11,199 pesos Disfruta de las mejores aplicaciones para programas, peliculas y series como Netflix, Youtube, PrimeVideo, Hulu, y muchas mas.' +
                            'Vea sus programas favoritos, películas y entretenimiento deportivo con un excepcional detalle de alta definición. '+
                            'Ahora puede conectar fácilmente su cámara digital u otro dispositivo USB para ver archivos JPEG compatibles.'+
                            'Las capacidades de salida de audio, audio digital y USB le permiten personalizar aún más la experiencia de visualización y escucha de su televisor.';
                            sentence = sentence.toLowerCase();
                            if(sentence.includes(texto.toLowerCase())){
                                window.location = "productos.php";
                            }else{
                                var sentence = 'Una laptop reforzada de 14 rediseñada para ser más delgada '+ 
                                'más liviana y preparada para lo que necesite. Con una pantalla FHD inmersiva y '+ 
                                'baterías dobles intercambiables en caliente. ACER PREDATOR 21X '+
                                'Procesador: 8ª generación del Procesador Intel® Core™ i5-8350U (6MB Caché, hasta 3,60GHz) '+
                                'Sistema operativo: Windows 10 Pro, 64-bit, Inglés, Francés, Español '+
                                'Costo $56,677.47 pesos '+
                                'Pantalla: FHD WVA de 14" (1920 x 1080), antirreflejo, sin funcionalidad táctil, con cámara con obturador de privacidad y micrófono '+
                                'Memoria: 32GB de Memoria DDR4 a 2666MHz, sin paridad [Non-ECC] (2 DIMMs x 8GB) '+
                                'Disco duro: Disco de estado sólido (SSD) M.2 PCIe NVMe clase 35 de 128GB '+
                                'Garantía: 3 años de Servicio de visita a centros autorizados para reparaciones (Carry-In Service) '+
                                'Teclado: Teclado español sellado con iluminación interior';
                                sentence = sentence.toLowerCase();
                                if(sentence.includes(texto.toLowerCase())){
                                    window.location = "productLap.php";
                                }else{
                                    var sentence = 'El Asus ROG Phone 3 ZS661KS posee el novedoso sistema operativo Android 10 que '+
                                    'incorpora respuestas inteligentes y acciones sugeridas para todas tus aplicaciones. Entre sus diversas '+
                                    'funcionalidades encontrarás el tema oscuro, navegación por gestos y modo sin distracciones, para que '+
                                    'completes tus tareas mientras disfrutas al máximo tu dispositivo.'+
                                    'Dispositivo desbloqueado para que elijas la compañía telefónica que prefieras'+
                                    'Compatible con redes 5G Costo $ 21,999 pesos Pantalla AMOLED de 6.59 Tiene 3 cámaras traseras de 64Mpx/13Mpx/5Mpx '+
                                    'Cámaras delanteras de 24Mpx Procesador Snapdragon 865+ Quad-Core de 3.1GHz con 12GB de RAM '+
                                    'Batería de 6000mAh Con reconocimiento facial y sensor de huella dactilar';
                                    sentence = sentence.toLowerCase();
                                    if(sentence.includes(texto.toLowerCase())){
                                        window.location = "productPhon.php";
                                    }else{
                                        var sentence = 'Chronométre Optimum de F.P. Journe FP Journe Chronographe Monopoussoir Rattrapante, caja de platino 950 con acabado '+
                                        'mate y brazalete de platino 950 integrado, esta es la versión más nueva de este reloj donde no hay inserciones de goma en la caja o brazalete.'+
                                        'Resistente al agua: 164 ft/50 m Diámetro de la Esfera: 1.92 inch/49 mm Costo $ 599 pesos Banda de goma: alemán '+
                                        'VPeso del reloj: 56 g/1,97 oz Modelo de Batería: CR2032 sustituible Taiwán IC movimiento Locked metal cubierta posterior';
                                        sentence = sentence.toLowerCase();   
                                        if(sentence.includes(texto.toLowerCase())){
                                            window.location = "productRel.php";
                                        }else{
                                            var sentence = 'Sony WH-1000XM3 - Audífonos Bluetooth de diadema con noise cancelling, micrófono para llamadas con manos libres y control por voz con Amazon Alexa integrado, Negro'+
                                            'Audio de 200 mega Cancelación de sonido en un 50% Costo $999 pesos Audio de alta calidad Aprueba de agua y de raspones '+
                                            'Bluetooth con conexión wifi en todo el mundo Durabilidad de la vateria asta de una semana'; 
                                            sentence = sentence.toLowerCase();  
                                            if(sentence.includes(texto.toLowerCase())){
                                                window.location = "productAudi.php";
                                            }else{
                                                window.location = "notFound.php";
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
                


