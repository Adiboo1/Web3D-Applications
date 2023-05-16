function rotateX(model)
{
  document.getElementById(model).setAttribute('enabled', 'true');
}

function stopRotation(model)
{
  document.getElementById(model).setAttribute('enabled', 'false');
}

function front(model)
{
    document.getElementById(model + "__FrontCamera").setAttribute("bind", "true");
}

function topCam(model)
{
    document.getElementById(model + "__TopCamera").setAttribute("bind", "true");
}

function bottom(model)
{
    document.getElementById(model + "__BottomCamera").setAttribute("bind", "true");
}

var lightOn = true;

function headlight(model)
{
    lightOn = !lightOn;
    document.getElementById(model + "__NavInfo001").setAttribute('headlight', lightOn.toString());;
}

function wire(model)
{
	var e = document.getElementById(model);
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}