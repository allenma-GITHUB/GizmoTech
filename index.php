<?php
    // Load the XML file
    $xml = simplexml_load_file('xml/advertisements.xml');
    
    // Check if the XML file was loaded successfully
    if ($xml === false) {
        echo "Failed to load XML file.";
        exit;
    }
    $adsJson = json_encode($xml);

    $title = "Home";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Gizmo Tech Security Services: <?php echo $title; ?></title>
        <style>
            .welcome-notes {
                margin-top: 20px;
                
            }
            .side-panel {
                background-color: #f8f9fa;
                padding: 20px;
                border-radius: 5px;
                height: 100%;
            }
            .advertisement {
                display: flex;
                flex-direction: column;
                gap: 20px; 
            }
            .advertisement-item {
                width: 100%;
                border: 1px solid #ccc;
               padding: 10px;
            }
            .advertisement-item img, .advertisement-item video {
                width: 100%;
                height: auto;
                object-fit: cover;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <?php
            include("phpdocs/header.php")
        ?>
        <div class="container-fluid">
            <div class="row">
                <!-- Main content area -->
                <div class="col-md-9 mcb-background-overlay">
                    <div class="welcome-notes">
                        <h1 class="text-center">Welcome to GTSS</h1>
                        <div class="rounded-2 p-2">
                            <div class="text-center">
                                <img src="img/exec_pics/Maurice Allen.jpeg" width="200" class="rounded-circle">
                            </div>
                            <div class="text-center mt-3">
                                <span class="bg-secondary p-1 px-4 rounded text-white">CEO</span>
                                <h5 class="mt-2 mb-0">Maurice Allen</h5>
                                <span>Chief Executive Officer</span>
                            </div>
                            <div class = "mx-5 mt-2">
                                <p class="text-break">
                                    Dear Valued Customers, Stakeholders, and Investors,
                                </p>
                                <p>
                                    Welcome to Gizmo Tech Security Services (GTSS), your trusted partner in cutting-edge CCTV and IT solutions. 
                                    As the CEO of GTSS, I am thrilled to extend my heartfelt gratitude to each of you for choosing and supporting our company. 
                                    Our commitment to excellence drives us to deliver unparalleled security and technological services that meet the highest standards. 
                                    Your trust and confidence inspire us to innovate and constantly improve, ensuring that we provide solutions that protect and empower you in an ever-evolving digital landscape.
                                </p>
                                <p>
                                    To our esteemed customers, thank you for entrusting us with your security and IT needs. 
                                    Your satisfaction is our top priority, and we are dedicated to providing you with reliable, efficient, 
                                    and customized solutions that enhance your safety and productivity. 
                                    We value your feedback and strive to exceed your expectations with every interaction. 
                                    Your success is our success, and we are honored to be part of your journey.
                                </p>
                                <p>
                                    To our valued stakeholders and investors, your unwavering support and belief in our vision are the cornerstones of our growth and success. 
                                    We are committed to maintaining the highest levels of transparency, integrity, and performance, ensuring that your investment in GTSS yields substantial returns. 
                                    Together, we are building a future where technology and security are seamlessly integrated, creating safer and smarter environments for all. 
                                    Thank you for being an integral part of our mission to shape a secure and innovative world.
                                </p>
                                <p>
                                    Sincerely,<br>Maurice Allen<br>Chief Executive Officer<br>Gizmo Tech Security Services (GTSS)
                                </p>
                            </div>
                        </div>
                        <hr>
                        <h2 class="text-center mt-3">Message from the Executive Team</h2>
                        <div class="text-center">
                            <img src="img/exec_pics/Andrea.jpeg" width="100" class="rounded-circle">
                        </div>
                        <div class="text-center mt-3">
                            <span class="bg-secondary p-1 px-4 rounded text-white">COO</span>
                            <h5 class="mt-2 mb-0">Andre Johnson Wilson</h5>
                            <span>Chief Operating Officer</span>
                        </div>
                        <div class = "mx-5 mt-2">
                            <p >
                                Dear Customers, Stakeholders, and Investors,
                            </p>
                            <p>
                                Welcome to Gizmo Tech Security Services, where our mission is to provide innovative CCTV and IT solutions tailored to your unique needs. 
                                As the Chief Operating Officer of GTSS, I am proud to be part of a team that is dedicated to excellence and innovation. 
                                Our relentless pursuit of quality and efficiency ensures that we deliver solutions that not only meet but exceed your expectations. 
                                Your satisfaction and trust are the driving forces behind our commitment to continuous improvement and exceptional service.
                            </p>
                            <p>
                                To our loyal customers, your support is the foundation of our success. 
                                We are dedicated to understanding your needs and providing solutions that enhance your security and operational efficiency. 
                                Our team of experts is always ready to assist you, ensuring that you receive the best possible service and support. 
                                We are here to help you achieve your goals and safeguard your future with our state-of-the-art technologies.
                            </p>
                            <p>
                                To our stakeholders and investors, your confidence in our vision and strategy is greatly appreciated. 
                                We are committed to creating value and delivering outstanding results that reflect our dedication to excellence. 
                                Your investment fuels our growth and innovation, enabling us to explore new opportunities and expand our capabilities. 
                                Together, we are driving GTSS towards a future of sustained success and industry leadership.
                            </p>
                            <p>
                                Warm regards,<br>Andrea Johnson Wilson<br>Chief Operating Officer<br>Gizmo Tech Security Services (GTSS)
                            </p>
                            
                        </div>
                        <div class="text-center">
                            <img src="img/exec_pics/Jordane.jpeg" width="100" class="rounded-circle">
                        </div>
                        <div class="text-center mt-3">
                            <span class="bg-secondary p-1 px-4 rounded text-white">CTO</span>
                            <h5 class="mt-2 mb-0">Jordane Smith</h5>
                            <span>Chief Technolgy Officer</span>
                        </div>
                        <div class="mx-5 mt-2">
                            <p >
                                Dear Customers, Stakeholders, and Investors,
                            </p>
                            <p>
                                Welcome to Gizmo Tech Security Services, where our mission is to provide innovative CCTV and IT solutions tailored to your unique needs. 
                                As the Chief Operating Officer of GTSS, I am proud to be part of a team that is dedicated to excellence and innovation. 
                                Our relentless pursuit of quality and efficiency ensures that we deliver solutions that not only meet but exceed your expectations. 
                                Your satisfaction and trust are the driving forces behind our commitment to continuous improvement and exceptional service.
                            </p>
                            <p>
                                To our loyal customers, your support is the foundation of our success. 
                                We are dedicated to understanding your needs and providing solutions that enhance your security and operational efficiency. 
                                Our team of experts is always ready to assist you, ensuring that you receive the best possible service and support. 
                                We are here to help you achieve your goals and safeguard your future with our state-of-the-art technologies.
                            </p>
                            <p>
                                To our stakeholders and investors, your confidence in our vision and strategy is greatly appreciated. 
                                We are committed to creating value and delivering outstanding results that reflect our dedication to excellence. 
                                Your investment fuels our growth and innovation, enabling us to explore new opportunities and expand our capabilities. 
                                Together, we are driving GTSS towards a future of sustained success and industry leadership.
                            </p>
                            <p>
                                Warm regards,<br>Jordane Smith<br>Chief Operating Officer<br>Gizmo Tech Security Services (GTSS)
                            </p>
                        </div>
                        <div class="text-center">
                            <img src="img/exec_pics/Selena_Watson.jpg" width="100" height="100" class="rounded-circle">
                        </div>
                        <div class="text-center mt-3">
                            <span class="bg-secondary p-1 px-4 rounded text-white">CMO</span>
                            <h5 class="mt-2 mb-0">Selena Watson</h5>
                            <span>Chief Marketing Officer</span>
                        </div>
                        <div class="mx-5 mt-2">
                            <p>
                                Dear Customers, Stakeholders, and Investors,
                            </p>
                            <p>
                                Welcome to Gizmo Tech Security Services. As the Chief Marketing Officer of GTSS, I am thrilled to share our vision and commitment to excellence with you. 
                                Our goal is to provide innovative CCTV and IT solutions that address the unique challenges of our clients and enhance their security and operational efficiency. 
                                Your trust and engagement are the cornerstones of our success, and we are dedicated to building strong relationships with our customers, stakeholders, and investors.
                            </p>
                            <p>
                                To our valued customers, your satisfaction and success are our top priorities. 
                                We are committed to understanding your needs and delivering tailored solutions that exceed your expectations. 
                                Our marketing efforts are focused on ensuring that you have access to the latest information and resources that can help you make informed decisions about your security and IT requirements. 
                                Thank you for choosing GTSS as your partner in security and technology.
                            </p>
                            <p>
                                To our esteemed stakeholders and investors, your support and confidence are instrumental to our growth and innovation. 
                                We are dedicated to creating value through strategic marketing initiatives that enhance our brand reputation and market presence. 
                                Your investment enables us to reach new markets, develop new solutions, and drive our mission forward. 
                                Together, we are building a company that not only leads in technology and security but also inspires trust and loyalty among all our stakeholders.
                            </p>
                            <p>
                                Best regards,<br>Selena Watson<br>Chief Marketing Officer<br>Gizmo Tech Security Services (GTSS)
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Side panel -->
                <div class="col-md-3">
                    <div class="side-panel">
                        <h4 class="text-center">Advertisements</h4>
                        <div id="ad-container" class="advertisement"></div>
                        <hr>  
                    </div>
                </div>
            </div>
            <script>
            // JavaScript to handle the ad rotation
            const ads = <?php echo $adsJson; ?>;
            const adContainer = document.getElementById('ad-container');
            let currentAdIndex = 0;

            function showAds() {
                // Clear previous ads
                adContainer.innerHTML = '';

                // Show the next three ads
                for (let i = 0; i < 3; i++) {
                    const adIndex = (currentAdIndex + i) % ads.advertisement.length;
                    const ad = ads.advertisement[adIndex];
                    let adContent = `<div class="advertisement-item">`;
                    adContent += `<h6 class="text-center">${ad.title}</h6>`;
                    if (ad.image) {
                        adContent += `<a href="${ad.link}" target="_blank"><img src="${ad.image}" alt="${ad.title}"></a>`;
                    } else if (ad.video) {
                        adContent += `<video src="${ad.video}" controls muted autoplay loop></video>`;
                    }
                    adContent += `<div class="advertisement-content"><p>${ad.description}</p></div>`;
                    adContent += `</div>`;
                    adContainer.innerHTML += adContent;
                }

                // Move to the next set of ads
                currentAdIndex = (currentAdIndex + 3) % ads.advertisement.length;
            }

            // Rotate ads every 10 seconds
            setInterval(showAds, 15000);

            // Show the first set of ads immediately
            showAds();
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>