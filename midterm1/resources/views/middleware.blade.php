@extends('Components.Layout')

@section('title', 'middleware')

@section('content') 

<!-- Apply blue background to the entire section -->
<section class="home-heading" style="background-color: #007bff; padding: 20px;">
    <div class="heading"></div> 
    <div class="heading"></div> 

    <div class="feature">
        <div class="feature-box">
            <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h1>What is Middleware?</h1>
                <p>Middleware is a layer of software in web development that sits between the server and the application, handling requests and responses. It is used to perform tasks like authentication, logging, data validation, or modifying the request before it reaches the main application logic. Middleware helps in managing common processes such as ensuring that only authorized users can access certain resources or logging request details for monitoring purposes. It acts as a filter that either processes the incoming requests or handles the outgoing responses before they reach the client. For example, in Laravel, you can implement middleware for request logging, which logs details like the HTTP method, URL, IP address, and user agent for each incoming request. This can be useful for tracking user activity or debugging. To implement this, you can create a custom middleware that captures request information and logs it using Laravel’s logging system. The middleware can then be registered in the Kernel.php file and applied to specific routes, ensuring that the request details are logged before the request is passed to the controller or returned to the user.</p>
            </div>
        </div>
    </div>

    <div class="feature">
        <div class="feature-box">
            <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h1>What are my Understanding about Middleware?</h1>
                <p>Based on my understanding: Middleware acts as a bridge between a request and a response in a web application. It processes HTTP requests and performs specific tasks before passing them to a controller or returning a response. Middleware can handle tasks such as authentication, logging, request validation, or restricting access based on certain conditions. It ensures that all requests follow the defined rules, improving the application's security and functionality.</p>
                <div class="feature-box">
                    <a href="https://github.com/erimiese/WD_LabAct3?fbclid=IwZXh0bgNhZW0CMTEAAR1MNoHR3Ko0H7FUlkne8SQB0MBzmjIk6_0VFRkU5us98c5KvrLWi4QXEZA_aem_AHXd9pNUE_lAfWh9oniARg" class="check-btn">View on GitHub</a>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div style="text-align: center;">
            <h2>Example of <span style="color: #d9534f;">Middleware</span></h2>
            <img src="/css/LAYOUT2.png" alt="LAYOUT2" style="width: 100%; max-width: 400px; border-radius: 8px;">
            <img src="/css/LAYOUT3.png" alt="LAYOUT3" style="width: 100%; max-width: 400px; border-radius: 8px;">
        </div>
    </div>
</section>

@endsection
