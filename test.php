<!doctype html>
<html>
<head>
  <style>
    details.fade .fade-content {
      max-height: 0;
      opacity: 0;
      overflow: hidden;
      transition: max-height 0.35s ease, opacity 0.35s ease;
    }

    details.fade[open] .fade-content {
      max-height: 500px;
      opacity: 1;
    }

    #DisclosureOne .fade-content {
      position: fixed;
      top: 60px;
      left: 0;
      width: 100%;
      background: #333;
      color: white;
    }
  </style>
</head>
<body>
  <details id="DisclosureOne" class="fade">
    <summary>Menu</summary>
    <div class="fade-content">
      <nav>
        <a href="#">One</a><br>
        <a href="#">Two</a><br>
        <a href="#">Three</a>
      </nav>
    </div>
  </details>
</body>
</html>
