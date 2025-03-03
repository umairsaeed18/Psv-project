<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Reward/Progress Tracker</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel="stylesheet" href="styles-umair.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styles-hristo.css">
    </head>
	<body>
		<header class="header">
		<?php include "nav.php"?>
			
			<div id="appConatainer">
				<div class="screenContainer" id="scoresheet">
					<div id="sectionHeader">
						<div class="teamImg">
							<img src="https://1.bp.blogspot.com/-ApgtS8p7MOo/Xs-odWMc5RI/AAAAAAACanc/4oYWX3-mkY0X7cw3hC37rvG_11tzkYsgwCNcBGAsYHQ/s1600/new-psv-logo-2020%2B%25283%2529.png" />
							<div>PSV</div>
						</div>
						<div id="labels">
							<h5>30 APRIL 2023</h5>
							<h4>VS</h4>
							<div id="score">
								<ul>
									<li>1</li>
									<li>4</li>
								</ul>
							</div>
						</div>
						<div class="teamImg">
							<img src="https://a.espncdn.com/i/teamlogos/soccer/500/139.png"/>
							<div>AJAX</div>
						</div>
					</div>
			<div id="matchReport">

								
                    <div class="container">
                        <div class="battle-pass">
                        <h1>Battle Pass Reward Tracker</h1>
                            <div class="rewards">
                                <div class="reward">
                                    <div class="reward-box">
                                        <span class="reward-name">Reward 1</span>
                                        <span class="reward-status">Locked</span>
                                    </div>
                                 </div>
                                <div class="reward">
                                    <div class="reward-box">
                                        <span class="reward-name">Reward 2</span>
                                        <span class="reward-status">Locked</span>
                                    </div>
                                </div>
                                <div class="reward">
                                    <div class="reward-box">
                                        <span class="reward-name">Reward 3</span>
                                        <span class="reward-status">Locked</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

			
			</div>
		</header>
        <script src="script.js"></script>
	</body>
	<script src="assets/js/nav.js"></script>
</html>