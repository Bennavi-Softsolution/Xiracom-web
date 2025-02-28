
@include("nav-bar2")
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Information -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examparlour - School Learning Materials in Kenya & Africa </title>

    <!-- Importing Bootstrap and Custom Styles -->
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    <link rel="stylesheet" href="style/examparlour.css">
</head>
<body>
    <div style="background-color: #399C23">


    <!-- Hero Section -->
    <div class="container-fluid heroes-section bg-success text-white py-5 mt-5">
        <div class="container text-center">
            <div class="row align-items-center">
                <!-- Hero Text Content -->
                <div class="col-md-6 text-md-left mt-5">
                    <h1>Examparlour -Smarter Learning</h1>
                    <p>Experience Xiracom Limited’s advanced learning system, offering students from primary to university a rich pool of study materials, interactive tests, and Q&A resources. Track progress and enhance learning—all in one place.<b>— Gerry Ayange, CTO, Xiracom Limited</b></p>
                    <a href="https://examparlour.com" class="btn btn-primary">Join Us</a>
                    <a href="https://examparlour.com" class="btn btn-secondary">Start Learning</a>
                    <!-- Hero Image -->
                    <div class="">
                    <img src="images/Examparlour1.png" class="examparlour-image"alt="Hero Image">
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Core Features Section -->
    <div class="container-fluid core-features-section py-5">
        <div class="container text-center">
            <h3 class="mb-4" style="color:#000080;font-weight:500;"> <img src="images/examparlour.png"> Core Features</h3>
            <div class="row d-flex justify-content-center">
                <!-- Feature 1: Study Materials -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Examparlour4.png" alt="Study Materials" class="img-fluid mb-3">
                        <h5>Comprehensive Study Materials</h5>
                        <p>Access expertly curated content for every subject, designed to help you master concepts at your own pace.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Feature 2: Interactive Tests -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Examparlour3.png" alt="Interactive Tests" class="img-fluid mb-3">
                        <h5>Take Interactive Tests</h5>
                        <p>Evaluate your knowledge with customized tests that adapt to your learning level and track your performance.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
                <!-- Feature 3: Track Progress -->
                <div class="col-md-4 mb-4">
                    <div class="p-3 shadow rounded">
                        <img src="./images/Examparlour2.png" alt="Track Progress" class="img-fluid mb-3">
                        <h5>Track Your Progress</h5>
                        <p>Monitor your study habits and test results to stay on top of your goals with real-time insights.</p>
                        <a href="#" class="btn btn-warning">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Steps Section -->
    <div class="container-fluid steps-section bg-light py-5">
        <div class="container text-center">
            <h2>Unlock Your Learning Potential in 4 Simple Steps</h2>
            <div class="row">
                <!-- Step 1: Sign Up -->
                <div class="col-md-3">
                    <div class="step-frame">
                        <img src="./images/Examparlour5.png" alt="Step 1">
                    </div>
                    <h5>Sign Up</h5>
                </div>
                <!-- Step 2: Choose Study Material -->
                <div class="col-md-3">
                    <div class="step-frame">
                        <img src="./images/Examparlour6.png" alt="Step 2">
                    </div>
                    <h5>Choose Study Material</h5>
                </div>
                <!-- Step 3: Take Interactive Tests -->
                <div class="col-md-3">
                    <div class="step-frame">
                        <img src="./images/Examparlour7.png" alt="Step 3">
                    </div>
                    <h5>Take Interactive Tests</h5>
                </div>
                <!-- Step 4: Track Progress -->
                <div class="col-md-3">
                    <div class="step-frame">
                        <img src="./images/Examparlour8.png" alt="Step 4">
                    </div>
                    <h5>Track Progress</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Smart Learning Tips Section -->
    <div class="container-fluid smart-tips-section ">
        <div class="container text-center">
            <h2>Smart Learning Tips</h2>
            <div class="row card-wrapper">
                <!-- Tip 1 -->
                <div class="col-md-3 card ">
                    <div class="card-image" style="background: url('./images/Examparlour9.png') no-repeat center/cover;"></div>
                    <div class="card-body">
                        <h5 class="card-title">Top 10 Tips for Acing Exams</h5>
                        <p class="card-text">
                            “Success is the sum of small efforts, repeated day in and day out.” - Robert Collier
                        </p>
                        <a href="#" class="btn btn-link">Click here to read</a>
                    </div>
                </div>
                <!-- Tip 2 -->
                <div class="col-md-3 card">
                    <div class="card-image" style="background: url('./images/Examparlour10.png') no-repeat center/cover;"></div>
                    <div class="card-body">
                        <h5 class="card-title">How to Stay Focused While Studying</h5>
                        <p class="card-text">
                            "Concentrate all your thoughts upon the work in hand. The sun’s rays do not burn until brought to a focus." - Alexander Graham Bell
                        </p>
                        <a href="#" class="btn btn-link">Click here to read</a>
                    </div>
                </div>
                <!-- Tip 3 -->
                <div class="col-md-3 card">
                    <div class="card-image" style="background: url('./images/Examparlour11.png') no-repeat center/cover;"></div>
                    <div class="card-body">
                        <h5 class="card-title">Time Management</h5>
                        <p class="card-text">
                            "Never do tomorrow what you can do today. Procrastination is the thief of time.” – Charles Dickens
                        </p>
                        <a href="#" class="btn btn-link">Click here to read</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("footer")
</body>
</html>
