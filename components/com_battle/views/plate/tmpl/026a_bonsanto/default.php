<html>
	<head>
		<script src="/components/com_battle/views/phaser/tmpl/_site/js/jquery-2.0.3.min.js"></script>
		<!-- Phaser -->
        <script src="/components/com_battle/views/phaser/tmpl/_site/js/phaser.js"></script>
        <script src="custom.js"></script>

    <style>
      body {
        margin: 0;
      }

      #world {
        position: relative;
      }


      #startScreen > *,
      #ui-overlay > * {
        position: absolute;
        box-sizing: border-box;
      }

      .message {
        top: 316px;
        left: 0;
        width: 640px;
        height:164px;
        background-color: #03442E;
        padding: 10px;
        font-family: Arial, sans-serif;
        font-size: 24px;
        text-align: left;
        color: #8CE04C;
      }

    </style>
	</head>
	
	<body>
			
		<div id="world">
		</div>

    <div id="startScreen">
    </div>

    <div id="ui-overlay">
    </div>

    <script src='state01.js'></script>
    <script src='state02.js'></script>
    <script src='state03.js'></script>
    <script src='/components/com_battle/views/plate/tmpl/026a_bonsanto/script.js'></script>



	</body>
</html>

