<?php
	include "babylonjs.php";
?>
<canvas id="canvas">

</canvas>

<script>
    window.addEventListener("DOMContentLoaded", function()
    {
        var canvas = document.getElementById("canvas");
        var engine = new BABYLON.Engine(canvas, true);
        var createScene = function ()
        {
            var scene = new BABYLON.Scene(engine);
            scene.clearColor = new BABYLON.Color3.White();
            var camera = new BABYLON.FreeCamera("cam1", new BABYLON.Vector3(3,5,-10),scene);
            camera.setTarget(BABYLON.Vector3.Zero());
            camera.attachControl(canvas,true);



            var box = BABYLON.Mesh.CreateBox("Box", 4.0, scene);
            camera.keysUp.push(87);
            camera.keysDown.push(83);
            camera.keysLeft.push(65);
            camera.keysRight.push(68);
            return scene;
        }
        var scene = createScene();
        engine.runRenderLoop(function()
        {
            scene.render();
        });
    });
</script>