<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="A JavaScript library that can upload anything you throw at it, optimizes images for faster uploads, and offers a great, accessible, silky smooth user experience.">
    
    <title></title>


    <!-- facebook -->
    <meta property="og:type" content="product">
    <meta property="og:title" content="Easy File Uploading With JavaScript | FilePond">
    <meta property="og:url" content="https://pqina.nl/filepond/">
    <meta property="og:product_link" content="https://pqina.nl/filepond/">
    <meta property="og:image" content="https://pqina.nl/filepond/static/assets/social-square.png?1616609658">
    <meta property="og:description" content="A JavaScript library that can upload anything you throw at it, optimizes images for faster uploads, and offers a great, accessible, silky smooth user experience.">
    <meta property="og:locale" content="en_US">

    <!-- twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@pqina_">
    <meta name="twitter:creator" content="@rikschennink">
    <meta name="twitter:title" content="Easy File Uploading With JavaScript | FilePond">
    <meta name="twitter:description" content="A JavaScript library that can upload anything you throw at it, optimizes images for faster uploads, and offers a great, accessible, silky smooth user experience.">
    <meta name="twitter:image" content="https://pqina.nl/filepond/static/assets/social-square.png?1616609658">
    <meta name="twitter:image:alt" content="">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- styles for site -->
    <link rel="stylesheet" type="text/css" href="{{asset('html/static/css/style.css')}}">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta3/css/bootstrap.min.css" integrity="sha512-N415hCJJdJx+1UBfULt+i+ihvOn42V/kOjOpp1UTh4CZ70Hx5bDlKryWaqEKfY/8EYOu/C2MuyaluJryK1Lb5Q==" crossorigin="anonymous" /> --}}

{{-- <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet"> --}}


<link href="{{asset('css/filepond.css')}}" rel="stylesheet" />

<link href="{{asset('css/filepond-plugin-image-preview.css')}}" rel="stylesheet">


    
    

    
    
    
</head>
<body data-module="ScrollTracker" class="invert-header">
    
    <header  class="section-hero">
        
        <h1 aria-label="FilePond by PQINA">
            <a href="index.html">
                <span class="implicit"></span>
            </a>
            <a href="https://pqina.nl/">by PQINA</a>
        </h1>


        <nav>
            
            <h2 class="implicit"
                data-module="SectionToggler"
                data-context="@media (max-width:50em)">Menu</h2>
            <div>

                <ul role="list">
                    
<li><a href="https://github.com/pqina/filepond/" rel="noopener" target="_blank">Download</a></li>
<li><a href="#examples">Examples</a></li>
<li><a href="#features">Features</a></li>
<li><a href="https://pqina.nl/doka/?ref=filepond">Image Editor</a></li>
<li><a href="plugins/index.html">Plugins</a></li>
<li><a href="docs/index.html" target="_blank">Docs</a></li>

                </ul>

            </div>

        </nav>
    </header>

    <main>
    

<section class="section-hero section-full section-centered">

    <div class="content-wrapper content-centered">

        <p>
            <strong>Image Optimization for better SEO</strong>
        </p>

        <p>
            A <strong>JavaScript library</strong> that can upload anything you throw at it, optimizes images for <strong>faster uploads</strong>, and offers a great, accessible, <strong>silky smooth user experience</strong>.
        </p>


        <div class="ponds">
                
            <input type="file" 
            id="fileInput" 
                class="filepond"
                name="filename" 
                data-allow-image-preview="true"
                data-instant-upload="true"
                data-max-file-size="3MB">

        </div>

        <div class="hero-links-wrapper">

            <div class="hero-links">

                <a class="button" href="#adapters"> 
                    Auto Optimization
                </a>
                <a class="button" href="#adapters"> 
                    Compress Image
                </a>
                <a class="button" href="#adapters"> 
                    convert to WebP
                </a>

                <a href="https://github.com/pqina/filepond" class="button button-call-to-action">
                   Download 

                   
                </a>

            </div>

        </div>

    </div> 


</section>

<section class="section-adapters" id="adapters">

    <h2 class="section-title">Framework Adapters</h2>

    <div class="content-wrapper content-narrow content-centered">
    <p>The core library is written in vanilla JavaScript and therefore can be used everywhere.</p>




    <div class="adapter-list">
    <ul>
        <li>
            <a href="https://github.com/pqina/react-filepond">
                <svg aria-hidden="true" width="256" height="228" viewBox="0 0 256 228" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M210.483 73.824a171.49 171.49 0 0 0-8.24-2.597c.465-1.9.893-3.777 1.273-5.621 6.238-30.281 2.16-54.676-11.769-62.708-13.355-7.7-35.196.329-57.254 19.526a171.23 171.23 0 0 0-6.375 5.848 155.866 155.866 0 0 0-4.241-3.917C100.759 3.829 77.587-4.822 63.673 3.233 50.33 10.957 46.379 33.89 51.995 62.588a170.974 170.974 0 0 0 1.892 8.48c-3.28.932-6.445 1.924-9.474 2.98C17.309 83.498 0 98.307 0 113.668c0 15.865 18.582 31.778 46.812 41.427a145.52 145.52 0 0 0 6.921 2.165 167.467 167.467 0 0 0-2.01 9.138c-5.354 28.2-1.173 50.591 12.134 58.266 13.744 7.926 36.812-.22 59.273-19.855a145.567 145.567 0 0 0 5.342-4.923 168.064 168.064 0 0 0 6.92 6.314c21.758 18.722 43.246 26.282 56.54 18.586 13.731-7.949 18.194-32.003 12.4-61.268a145.016 145.016 0 0 0-1.535-6.842c1.62-.48 3.21-.974 4.76-1.488 29.348-9.723 48.443-25.443 48.443-41.52 0-15.417-17.868-30.326-45.517-39.844zm-6.365 70.984c-1.4.463-2.836.91-4.3 1.345-3.24-10.257-7.612-21.163-12.963-32.432 5.106-11 9.31-21.767 12.459-31.957 2.619.758 5.16 1.557 7.61 2.4 23.69 8.156 38.14 20.213 38.14 29.504 0 9.896-15.606 22.743-40.946 31.14zm-10.514 20.834c2.562 12.94 2.927 24.64 1.23 33.787-1.524 8.219-4.59 13.698-8.382 15.893-8.067 4.67-25.32-1.4-43.927-17.412a156.726 156.726 0 0 1-6.437-5.87c7.214-7.889 14.423-17.06 21.459-27.246 12.376-1.098 24.068-2.894 34.671-5.345.522 2.107.986 4.173 1.386 6.193zM87.276 214.515c-7.882 2.783-14.16 2.863-17.955.675-8.075-4.657-11.432-22.636-6.853-46.752a156.923 156.923 0 0 1 1.869-8.499c10.486 2.32 22.093 3.988 34.498 4.994 7.084 9.967 14.501 19.128 21.976 27.15a134.668 134.668 0 0 1-4.877 4.492c-9.933 8.682-19.886 14.842-28.658 17.94zM50.35 144.747c-12.483-4.267-22.792-9.812-29.858-15.863-6.35-5.437-9.555-10.836-9.555-15.216 0-9.322 13.897-21.212 37.076-29.293 2.813-.98 5.757-1.905 8.812-2.773 3.204 10.42 7.406 21.315 12.477 32.332-5.137 11.18-9.399 22.249-12.634 32.792a134.718 134.718 0 0 1-6.318-1.979zm12.378-84.26c-4.811-24.587-1.616-43.134 6.425-47.789 8.564-4.958 27.502 2.111 47.463 19.835a144.318 144.318 0 0 1 3.841 3.545c-7.438 7.987-14.787 17.08-21.808 26.988-12.04 1.116-23.565 2.908-34.161 5.309a160.342 160.342 0 0 1-1.76-7.887zm110.427 27.268a347.8 347.8 0 0 0-7.785-12.803c8.168 1.033 15.994 2.404 23.343 4.08-2.206 7.072-4.956 14.465-8.193 22.045a381.151 381.151 0 0 0-7.365-13.322zm-45.032-43.861c5.044 5.465 10.096 11.566 15.065 18.186a322.04 322.04 0 0 0-30.257-.006c4.974-6.559 10.069-12.652 15.192-18.18zM82.802 87.83a323.167 323.167 0 0 0-7.227 13.238c-3.184-7.553-5.909-14.98-8.134-22.152 7.304-1.634 15.093-2.97 23.209-3.984a321.524 321.524 0 0 0-7.848 12.897zm8.081 65.352c-8.385-.936-16.291-2.203-23.593-3.793 2.26-7.3 5.045-14.885 8.298-22.6a321.187 321.187 0 0 0 7.257 13.246c2.594 4.48 5.28 8.868 8.038 13.147zm37.542 31.03c-5.184-5.592-10.354-11.779-15.403-18.433 4.902.192 9.899.29 14.978.29 5.218 0 10.376-.117 15.453-.343-4.985 6.774-10.018 12.97-15.028 18.486zm52.198-57.817c3.422 7.8 6.306 15.345 8.596 22.52-7.422 1.694-15.436 3.058-23.88 4.071a382.417 382.417 0 0 0 7.859-13.026 347.403 347.403 0 0 0 7.425-13.565zm-16.898 8.101a358.557 358.557 0 0 1-12.281 19.815 329.4 329.4 0 0 1-23.444.823c-7.967 0-15.716-.248-23.178-.732a310.202 310.202 0 0 1-12.513-19.846h.001a307.41 307.41 0 0 1-10.923-20.627 310.278 310.278 0 0 1 10.89-20.637l-.001.001a307.318 307.318 0 0 1 12.413-19.761c7.613-.576 15.42-.876 23.31-.876H128c7.926 0 15.743.303 23.354.883a329.357 329.357 0 0 1 12.335 19.695 358.489 358.489 0 0 1 11.036 20.54 329.472 329.472 0 0 1-11 20.722zm22.56-122.124c8.572 4.944 11.906 24.881 6.52 51.026-.344 1.668-.73 3.367-1.15 5.09-10.622-2.452-22.155-4.275-34.23-5.408-7.034-10.017-14.323-19.124-21.64-27.008a160.789 160.789 0 0 1 5.888-5.4c18.9-16.447 36.564-22.941 44.612-18.3zM128 90.808c12.625 0 22.86 10.235 22.86 22.86s-10.235 22.86-22.86 22.86-22.86-10.235-22.86-22.86 10.235-22.86 22.86-22.86z"/></svg>
                React
            </a>
        </li>
        <li>
            <a href="https://github.com/pqina/vue-filepond">
                <svg aria-hidden="true" width="90" height="90" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 196.32 170.02"><polygon fill="currentColor" points="120.83 0 98.16 39.26 75.49 0 0 0 98.16 170.02 196.32 0 120.83 0"/><polygon fill="rgba(32, 38, 50, 0.52)" points="120.83 0 98.16 39.26 75.49 0 39.26 0 98.16 102.01 157.06 0 120.83 0"/></svg>
                Vue
            </a>
        </li>
        <li>
            <a href="https://github.com/pqina/svelte-filepond">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="100" height="100" viewBox="12 14 110 110">
<path fill="rgba(255, 255, 255, 0.3)" d="M110.23,28.39C99.83,13.51,79.29,9.1,64.44,18.56L38.36,35.18a29.9,29.9,0,0,0-13.52,20,31.53,31.53,0,0,0,3.1,20.24,29.94,29.94,0,0,0-4.47,11.18,31.86,31.86,0,0,0,5.45,24.12c10.4,14.88,30.94,19.29,45.79,9.83L100.79,104a30,30,0,0,0,13.52-20,31.52,31.52,0,0,0-3.11-20.23,30.13,30.13,0,0,0,4.48-11.18,31.9,31.9,0,0,0-5.45-24.12"/>
<path fill="currentColor" d="M61.89,112.16a20.73,20.73,0,0,1-22.24-8.25,19.14,19.14,0,0,1-3.27-14.5A17,17,0,0,1,37,87l.49-1.5,1.34,1A33.78,33.78,0,0,0,49,91.56l1,.29-.09,1A5.9,5.9,0,0,0,51,96.7a6.25,6.25,0,0,0,6.7,2.48,5.85,5.85,0,0,0,1.6-.7L85.34,81.86a5.42,5.42,0,0,0,2.45-3.64,5.77,5.77,0,0,0-1-4.37,6.25,6.25,0,0,0-6.7-2.48,5.72,5.72,0,0,0-1.6.7l-10,6.35a19.1,19.1,0,0,1-5.29,2.32A20.72,20.72,0,0,1,41,72.5,19.16,19.16,0,0,1,37.75,58a18,18,0,0,1,8.13-12.06L72,29.32A19.05,19.05,0,0,1,77.26,27a20.71,20.71,0,0,1,22.23,8.25,19.14,19.14,0,0,1,3.28,14.5,20.15,20.15,0,0,1-.62,2.43l-.5,1.5-1.33-1a33.78,33.78,0,0,0-10.2-5.1l-1-.29.09-1a5.86,5.86,0,0,0-1.06-3.88A6.23,6.23,0,0,0,81.49,40a5.72,5.72,0,0,0-1.6.7L53.8,57.29a5.45,5.45,0,0,0-2.45,3.63,5.84,5.84,0,0,0,1,4.38A6.25,6.25,0,0,0,59,67.78a6,6,0,0,0,1.6-.7l10-6.34a18.61,18.61,0,0,1,5.3-2.33,20.7,20.7,0,0,1,22.23,8.24,19.16,19.16,0,0,1,3.28,14.5,18,18,0,0,1-8.13,12.06L67.19,109.83a19.18,19.18,0,0,1-5.3,2.33"/></svg>
                Svelte
            </a>
        </li>
        <li>
            <a href="https://github.com/pqina/ngx-filepond">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="30 30 210 190"><path fill="currentColor" d="M125 153.4h-24.7l-11.7 29.2H66.8L125 52.1v.1V30L31.9 63.2l14.2 123.1L125 230v-76.6z"/><path fill="currentColor" d="M108 135.4h17V94.5z"/><g opacity=".8"><path fill="currentColor" d="M125 153.4h24.7l11.7 29.2h21.8L125 52.1v.1V30l93.1 33.2-14.2 123.1L125 230v-76.6z"/><path fill="currentColor" d="M142 135.4h-17V94.5z"/></g></svg>
                Angular
            </a>
        </li>
        <li>
            <a href="https://github.com/pqina/jquery-filepond">
                <svg aria-hidden="true" width="116" height="116" viewBox="0 0 116 116" xmlns="http://www.w3.org/2000/svg">
                <g fill="currentColor"><path d="M88.708 75.464l-.402 1.042c-6.85 13.34-18.989 21.524-36.303 21.885-8.094.167-15.806-1.91-20.844-4.168C20.287 89.338 11.142 80.279 6.148 70.6c-7.164-13.875-8.456-33.176 6.44-47.592.23 0-1.807 3.126-1.577 3.126l-.41 1.334C-.133 61.074 32.938 89.874 65.086 86.58c7.726-.792 17.578-5.023 23.622-11.116"/><path d="M69.254 61.568c8.088.055 16.536-3.725 21.539-9.032-4.377 11.11-17.05 18.251-34.044 15.98-14.23-1.904-27.785-16.223-29.181-30.571-1.021-10.442 2.618-16.674 8.615-24.234-2.084 3.954-2.863 7.003-3.057 8.948-2.278 22.588 18.044 38.79 36.128 38.909"/><path d="M89.98 33.512c-1.257 2.884-8.496 8.33-11.693 9.011-12.659 2.697-20.766-3.306-25.013-10.137-.631-1.02-1.798-3.806-2.007-4.515-1.647-5.6-.89-14.07 4.023-18.454-1.48 4.169-1.696 9.011-.917 12.159.472 1.903 1.91 5.226 3.349 7.316 2.618 3.807 4.279 4.732 7.642 6.754 1.515.91 3.14 1.64 3.842 1.84 3.189.939 9.922 3.412 20.775-3.974"/></g></g></svg>
                jQuery
            </a>
        </li>
    </ul>
</div>

    <p class="content-narrow content-centered">
    Receive a notification when a new adapter is released by <a href="#subscribe">subscribing to the newsletter</a>
    </p>
    
    </div>

</section>




<section class="section-features" id="features">

    <div class="content-wrapper content-centered content-wide">

        <h2 class="section-title">Feature Overview</h2>

        <ul role="list" class="features-highlighted">
            <li>
                <h3 class="title">Multiple Input Formats</h3>
                <span class="icon">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                </span>
                <p>Accepts directories, files, blobs, local URLs, remote URLs and Data URIs.</p>
            </li>
            <li>
                <h3 class="title">Multiple File Sources</h3>
                <span class="icon">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                </span>
                <p>Drop files, select files from the file system, add files using the API, or copy and paste files.</p>
            </li>
            <li>
                <h3 class="title">Async or Sync Uploading</h3>
                <span class="icon">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud"><polyline points="16 16 12 12 8 16"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
                </span>
                <p>Send files to the server using XMLHttpRequest or store and submit with form post as base64 using the File Encode plugin.</p>
            </li>
            <li>
                <h3 class="title">Image Optimization</h3>
                <span class="icon">    
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                </span>
                <p>Automatic resizing and cropping of images on the client saves server bandwidth and dramatically increases upload speed.</p>
            </li>
            <li>
                <h3 class="title">Accessible</h3>
                <span class="icon">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                </span>
                <p>Tested with AT software like VoiceOver and JAWS. FilePond's user interface is navigable by Keyboard.</p>
            </li>
            <li>
                <h3 class="title">Responsive</h3>
                <span class="icon">                    
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-smartphone"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12" y2="18"></line></svg>
                </span>
                <p>Automatically scales to available space. Is functional on both mobile and desktop devices.</p>
            </li>
        </ul>

    </div>

</section>

    </main>

    <footer style="padding-top: 0px;">
<section class="section-roadmap" id="roadmap">

    <h2 class="section-title">Roadmap</h2>

    <div class="content-wrapper content-wide">
        
        <div>
            <h3><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>Core</h3>
            <ul>
                
                <li><span class="todo-check" data-state="checked"></span> <span>Grid view</span></li>
                
                <li><span class="todo-check" data-state="checked"></span> <span>Chunk uploading</span></li>
                
                <li><span class="todo-check" data-state="unchecked"></span> <span>Animated button icons</span></li>
             
                
            </ul>
        </div>

        <div>
            <h3>
<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg> Adapters</h3>
            <ul>
                
                <li><span class="todo-check" data-state="checked"></span> <span>Angular</span></li>
                
                <li><span class="todo-check" data-state="checked"></span> <span>Svelte</span></li>
                
        
                
            </ul>
        </div>

        <div>
            <h3><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>Plugins</h3>
            <ul>
                
                <li><span class="todo-check" data-state="checked"></span> <span>Image editor</span></li>
                
                <li><span class="todo-check" data-state="checked"></span> <span>Image rotation and flipping</span></li>
                
                
            </ul>
        </div>

    </div>
    
</section>

    </footer>



<script src="{{asset('js/filepondbundle.js')}}"></script>
<script src="{{asset('js/filepond.js')}}"></script>

<script src="{{asset('js/filepond-plugin-image-preview.js')}}"></script>

<script>
    FilePond.registerPlugin(
  FilePondPluginImagePreview

);
const inputElement = document.querySelector('input[type="file"]');
const pond = FilePond.create( inputElement );
FilePond.setOptions({
    server: { 
        url: '{{route('upload.store')}}',
        headers:{
            'X-CSRF-TOKEN':'{{csrf_token()}}'
        }

        }
});
</script>


</body>

</html>