var scene 			= null;
var renderer		= null;
var camera 			= null;
var orbitControls	= null;

var clock;
var CG_font			= null;
var lab_font		= null;
var fontLoaded		= null;
var textGroup;

var mirror 			= true;

var	textCG 			= "CG",
	fontNameCG		= "fonts/helvetiker_bold.typeface.json",
	textLab			= "lab",
	fontNameLab		= "fonts/optimer_regular.typeface.json",
	height 			= 20,
	size 			= 70,
	hover 			= 30,

	curveSegments 	= 4,

	bevelThickness 	= 2,
	bevelSize 		= 1.5,
	bevelEnabled 	= true;



// ****************************************************************
// ****                                                        ****
// ****************************************************************

function init() {

	clock = new THREE.Clock();
	
	scene = new THREE.Scene();

	renderer = new THREE.WebGLRenderer();


	renderer.setClearColor(new THREE.Color(0.0, 0.0, 0.0));
	renderer.setSize(window.innerWidth/4, window.innerHeight/4);

	document.getElementById("WebGL-output").appendChild(renderer.domElement);

	console.log("loadFont( " + fontNameCG + " )");
	loadFont(fontNameCG);
	console.log("CG_font => " + CG_font);
	
	// lab_font 	= loadFont(textLab, fontNameLab);
	// console.log(lab_font);
	
	camera = new THREE.PerspectiveCamera(70.0, window.innerWidth/window.innerHeight, 0.1, 30.0);
	
	orbitControls = new THREE.OrbitControls(camera);
	orbitControls.autoRotate = false;

	var globalAxis = new THREE.AxesHelper();
	scene.add( globalAxis );

	var plane = new THREE.Mesh (	new THREE.PlaneBufferGeometry( 100, 100, 64, 64 ),
									new THREE.MeshBasicMaterial( 	{ 	color: 0x08aa08, 
																		opacity: 0.5, 
																		transparent: true,
																		wireframe: true, 
																	} )
								);
	plane.rotation.x = - Math.PI / 2;
	scene.add( plane );

	// LIGHTS

	var dirLight = new THREE.DirectionalLight( 0xffffff, 0.125 );
	dirLight.position.set( 0, 0, 1 ).normalize();
	scene.add( dirLight );

	var pointLight = new THREE.PointLight( 0xffffff, 1.5 );
	pointLight.position.set( 0, 100, 90 );
	scene.add( pointLight );

	renderer.clear();
	render();
}

// ****************************************************************
// ****                                                        ****
// ****************************************************************

function loadFont( fontName) { 

var loader = new THREE.FontLoader();

	console.log("@loadFont( " + fontName + " )");

	loader.load 	( 	fontName, 	
						function ( response ) {
							CG_font = response;
							console.log("	@loadFont => CG_font " + CG_font.isFont + " )");
							createText();
							} 
					);

}

// ****************************************************************
// ****                                                        ****
// ****************************************************************

function render() {
	var delta = clock.getDelta();
    orbitControls.update(delta);

	renderer.render(scene, camera);
	requestAnimationFrame(render);
}

// ****************************************************************
// ****                                                        ****
// ****************************************************************

function createText() {

	console.log("@createText( " + textCG + " , " + CG_font + " )");

	textGeo = new THREE.TextGeometry 	( 	textCG, { 	font: CG_font,
														size: 5,
														height: 5,
														curveSegments: 40,
														bevelThickness: 0.5,
														bevelSize: 0.25,
														bevelEnabled: true
													}
										);
	textGeo.computeBoundingBox();

	var bb = textGeo.boundingBox;

	console.log(bb);

	var centerOffset = new THREE.Vector3 	( 	bb.min.x + 0.5 * ( bb.max.x - bb.min.x ),
												bb.min.y,
												bb.min.z + 0.5 * ( bb.max.z - bb.min.z )
											);
	console.log(centerOffset);

	var logoScale = Math.max(	bb.max.x - bb.min.x,
								bb.max.y - bb.min.y,
								bb.max.z - bb.min.z );
	console.log(logoScale);

	textGeo.computeVertexNormals();

	textBufGeo	= new THREE.BufferGeometry().fromGeometry( textGeo );
	materials 	= new THREE.MeshPhongMaterial( { color: 0x0303aa } );

	textMesh 	= new THREE.Mesh( textBufGeo, materials );

	// textMesh.translateX( -centerOffset.x);
	// textMesh.translateY( -centerOffset.y);
	// textMesh.translateZ( -centerOffset.z);
	
	// textMesh.scale = new THREE.Vector3(1.0/logoScale, 1.0/logoScale, 1.0/logoScale);

	// textMesh.updateMatrix();

	var maxCoord = Math.max(bb.max.x,bb.max.y,bb.max.z);
	
	camera.position.x 	= maxCoord*0.5;
	camera.position.y 	= maxCoord*0.5;
	camera.position.z 	= maxCoord*1.5;
	camera.far 			= new THREE.Vector3(	maxCoord*5, 
												maxCoord*5, 
												maxCoord*5).length();

	camera.lookAt(new THREE.Vector3(	(bb.max.x + bb.min.x)/2.0,
										(bb.max.y + bb.min.y)/2.0,
										(bb.max.z + bb.min.z)/2.0));
	camera.updateProjectionMatrix();


	scene.add( textMesh );
}
