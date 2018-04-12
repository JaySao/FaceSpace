function check_logo(imagevalue) {
            switch (imagevalue) {
            case 1:
                document.getElementById("imagedest").innerHTML = "<img src='./bird.png'>";
                break;
            case 2:
                document.getElementById("imagedest").innerHTML = "<img src='./snail.png'>";
                break;
            case 3:
                document.getElementById("imagedest").innerHTML = "<img src='./rabbit.png'>";
                break;
			case 4:
                document.getElementById("imagedest").innerHTML = "<img src='./fish.png'>";
                break;
			case 5:
                document.getElementById("imagedest").innerHTML = "<img src='./lobster.png'>";
                break;
			case 6:
                document.getElementById("imagedest").innerHTML = "<img src='./turtle.png'>";
                break;
            }
}

function check_back(backvalue) {
            switch (backvalue) {
            case 1:
                document.getElementById("backdest").innerHTML = "<img src='./black.jpg'>";
                break;
            case 2:
                document.getElementById("backdest").innerHTML = "<img src='./blue.jpg'>";
                break;
            case 3:
                document.getElementById("backdest").innerHTML = "<img src='./slate.jpg'>";
                break;
			case 4:
                document.getElementById("backdest").innerHTML = "<img src='./purple.jpg'>";
                break;
			case 5:
                document.getElementById("backdest").innerHTML = "<img src='./wood.jpg'>";
                break;
            }
}



