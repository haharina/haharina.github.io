const table = [
    "F", "Bihah ", "30", 1, 1,
    "F", "Ariffah", "24", 18, 1,
    "F", "Jann", "30", 1, 2,
    "F", "Aishah", "24", 2, 2,
    "F", "Farah", "24", 13, 2,
    "F", "Adreena", "24", 14, 2,
    "M", "Fahmi", "24", 15, 2,
    "F", "Are-Dyla", "25", 16, 2,
    "F", "Zaida", "24", 17, 2,
    "F", "Hazila", "26", 18, 2,
    "F", "Leyana", "24", 1, 3,
    "F", "Siti", "26", 2, 3,
    "F", "Che", "24", 13, 3,
    "F", "Izziani", "24", 14, 3,
    "F", "Syafiqa", "26", 15, 3,
    "F", "Qistina", "24", 16, 3,
    "F", "Shada", "26", 17, 3,
    "F", "Nurul", "25", 18, 3,
    "F", "Amanina", "23", 1, 4,
    "M", "Fakhrul", "24", 2, 4,
    "F", "Hyuna", "26", 3, 4,
    "M", "Lokman", "24", 4, 4,
    "M", "Hazim", "24", 5, 4,
    "F", "T-rah", "24", 6, 4,
    "M", "Syahrul", "24", 7, 4,
    "M", "Adnan", "24", 8, 4,
    "F", "Armi", "26", 9, 4,
    "F", "Aeen", "25", 10, 4,
    "F", "Suhailah", "24", 11, 4,
    "F", "Farizah", "24", 12, 4,
    "F", "Ryn", "24", 13, 4,
    "M", "Harrif", "27", 14, 4,
    "M", "Haikal", "24", 15, 4,
    "M", "Adib", "26", 16, 4,
    "M", "Syed", "23", 17, 4,
    "F", "Faridah", "26", 18, 4,
    "F", "Rosalinda", "35", 1, 5,
    "F", "Aziza", "24", 2, 5,
    "F", "Aimi", "27", 3, 5,
    "F", "Isniyanti", "25", 4, 5,
    "F", "Syera", "24", 5, 5,
    "M", "Johari", "24", 6, 5,
    "F", "Nurin", "24", 7, 5,
    "F", "Norain", "24", 8, 5,
    "F", "Fitrah", "24", 9, 5,
    "F", "Azimah", "24", 10, 5,
    "F", "Safariena", "24", 11, 5,
    "M", "Azman", "24", 12, 5,
    "F", "Awen Nazwen", "24", 13, 5,
    "M", "Syed", "26", 14, 5,
    "M", "Asraf", "24", 15, 5,
    "M", "Fadhil", "21", 16, 5,
    "M", "Saiful", "26", 17, 5,
    "F", "Eyka", "23", 18, 5,
    "F", "Ellham", "23", 1, 6,
    "F", "Zara", "23", 2, 6,
    "M", "Haqiem", "23", 4, 9,
    "M", "Izham", "24", 5, 9,
    "F", "Fifie", "23", 6, 9,
    "F", "Zubaidah", "22", 7, 9,
    "F", "Adlin", "22", 8, 9,
    "F", "Hanis", "21", 9, 9,
    "F", "Nusrah", "24", 10, 9,
    "M", "Amirul", "26", 11, 9,
    "M", "E-man", "24", 12, 9,
    "M", "Rahim", "53", 13, 9,
    "M", "Khayrun", "22", 14, 9,
    "M", "Farz", "22", 15, 9,
    "M", "Ikhmal", "25", 16, 9,
    "M", "Rahman", "23", 17, 9,
    "F", "Sazlina", "22", 18, 9,
    "M", "Azrul", "24", 4, 6,
    "M", "Aiman", "23", 5, 6,
    "M", "Adam", "17", 6, 6,
    "M", "Rezza", "37", 7, 6,
    "M", "Amir", "30", 8, 6,
    "M", "Nash", "24", 9, 6,
    "M", "Takiyuddin", "25", 10, 6,
    "M", "Fikri", "21", 11, 6,
    "F", "Atirah", "24", 12, 6,
    "F", "Fariesha", "24", 13, 6,
    "M", "Shakrul", "24", 14, 6,
    "M", "Fazly", "30", 15, 6,
    "F", "Ezia", "27", 16, 6,
    "F", "Wanie", "21", 17, 6,
    "F", "Yasmin", "13", 18, 6,
    "F", "Alisya", "37", 1, 7,
    "F", "Sekira", "37", 2, 7,
    "F", "Nur Najihah", "23", 4, 10,
    "M", "Angah Lolo", "23", 5, 10,
    "M", "Ershad", "24", 6, 10,
    "F", "Vishnu Priya", "25", 7, 10,
    "F", "Imtiyaz", "23", 8, 10,
    "F", "DurrahDinie", "23", 9, 10,
    "F", "Shazz Rina", "24", 10, 10,
    "M", "Fakhrul", "27", 11, 10,
    "M", "Berkelium", "40", 12, 10,
    "M", "Jay Johar", "42", 13, 10,
    "M", "Ehh Iskandar", "21", 14, 10,
    "M", "IzzatSyamim", "24", 15, 10,
    "M", "Khabil", "29", 16, 10,
    "M", "Shafiq", "30", 17, 10,
    "F", "NorHafiza", "26", 18, 10,
    "F", "Qila", "23", 4, 7,
    "F", "Syima", "21", 5, 7,
    "M", "WanShuk", "26", 6, 7,
    "F", "Atyqa", "24", 7, 7,
    "F", "AtiqahSuhaimi", "23", 8, 7,
    "M", "Hamizan", "22", 9, 7,
    "M", "Ansar", "23", 10, 7,
    "M", "Irfan", "22", 11, 7,
    "F", "AzwaLiza", "22", 12, 7,
    "M", "Faris", "24", 13, 7,
    "M", "Najwan", "21", 14, 7,
    "M", "Idlan", "22", 15, 7,
    "M", "Iskandar", "22", 16, 7,
    "F", "Ezie", "27", 17, 7,
    "F", "Izyan", "22", 18, 7
];

let camera, scene, renderer, controls, composer;
var hblur, vblur;
let targets = { simple: [], table: [], sphere: [], helix: [], grid: [] , cone:[]};

init();
animate();

function init() {

    initCamera();

    initScene();

    initObjects();

    addClickListeners();

    initRenderer();

    initTrackbarControls();

    transform(targets.table, 2000);

    window.addEventListener('resize', onWindowResize, false);

}

function initCamera() {

    camera = new THREE.PerspectiveCamera(40, window.innerWidth / window.innerHeight, 1, 10000);
    camera.position.z = 3000;

}

function initScene() {

    scene = new THREE.Scene();

}

function initRenderer() {

    renderer = new THREE.CSS3DRenderer();
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.getElementById('container').appendChild(renderer.domElement);
}

function initObjects() {

    simpleObjectsLayout();
    generateGeometricLayouts();

}

function addClickListeners() {

    addClickListener(targets.table, 'table');
    addClickListener(targets.sphere, 'sphere');
    addClickListener(targets.helix, 'helix');
    addClickListener(targets.grid, 'grid');
    addClickListener(targets.cone, 'cone');

}

function simpleObjectsLayout() {

    for (let i = 0; i < table.length; i += 5) {

        let object = new THREE.CSS3DObject(htmlElement(table, i));
        object.position.x = Math.random() * 4000 - 2000;
        object.position.y = Math.random() * 4000 - 2000;
        object.position.z = Math.random() * 4000 - 2000;

        scene.add(object);
        targets.simple.push(object);
        tableLayout(table, i);

    }

}

function htmlElement(table, i) {
    let element = document.createElement('div');
    element.className = 'element';
    if(table[i]=='F'){
        element.style.backgroundColor = 'rgba(255,20,147,' + (Math.random() * 0.5 + 0.25) + ')';
    }else{
        element.style.backgroundColor = 'rgba(0,0,255,' + (Math.random() * 0.5 + 0.25) + ')';
    }
    
    let number = document.createElement('div');
    number.className = 'number';
    number.textContent = (i / 5) + 1;
    element.appendChild(number);

    let symbol = document.createElement('div');
    symbol.className = 'symbol';
    symbol.textContent = table[i];
    element.appendChild(symbol);

    let details = document.createElement('div');
    details.className = 'details';
    details.innerHTML = table[i + 1] + '<br>' + table[i + 2];
    element.appendChild(details);

    element.addEventListener('click', ()=>elementClickHandler(i), false);

    return element;
}

function elementClickHandler(i) {

    transform(targets.table, 1000);

    new TWEEN.Tween(targets.simple[i / 5].position)
        .to({
            x: 0,
            y: 0,
            z: 2500
        }, Math.random() * 2000 + 2000)
        .easing(TWEEN.Easing.Exponential.InOut)
        .start();

    new TWEEN.Tween(this)
        .to({}, 2000 * 2)
        .onUpdate(render)
        .start();
}

function tableLayout(table, index) {

    let object = new THREE.Object3D();

    object.position.x = (table[index + 3] * 140) - 1330;
    object.position.y = -(table[index + 4] * 180) + 990;
    targets.table.push(object);

}

function addClickListener(target, elementId) {

    const button = document.getElementById(elementId);

    button.addEventListener('click', function() {
        transform(target, 2000);
    }, false);

}

function initTrackbarControls() {
    controls = new THREE.TrackballControls(camera, renderer.domElement);
    controls.rotateSpeed = 0.5;
    controls.minDistance = 500;
    controls.maxDistance = 6000;
    controls.addEventListener('change', render);
}

function generateGeometricLayouts() {

    let sphereVector = new THREE.Vector3();
    let helixVector = new THREE.Vector3();
    let coneVector = new THREE.Vector3();

    for (let i = 0, l = targets.simple.length; i < l; i++) {
        addSphereObject(sphereVector, i, l);
        addHelixObject(helixVector, i);
        addGridObject(i);
        addConeObject(coneVector, i);
    }

}

function addSphereObject(sphereVector, index, length) {

    const phi = Math.acos(-1 + (2 * index) / length);
    const theta = Math.sqrt(length * Math.PI) * phi;
    let object = new THREE.Object3D();

    object.position.setFromSphericalCoords(800, phi, theta);

    sphereVector.copy(object.position).multiplyScalar(2);

    object.lookAt(sphereVector);

    targets.sphere.push(object);
}

function addHelixObject(helixVector, index) {

    const theta = index * 0.175 + Math.PI;
    const y = -(index * 8) + 450;
    let object = new THREE.Object3D();

    object.position.setFromCylindricalCoords(900, theta, y);

    helixVector.x = object.position.x * 2;
    helixVector.y = object.position.y;
    helixVector.z = object.position.z * 2;

    object.lookAt(helixVector);

    targets.helix.push(object);
}

function addGridObject(index) {

    let object = new THREE.Object3D();
    object.position.x = ((index % 5) * 400) - 800;
    object.position.y = (-(Math.floor(index / 5) % 5) * 400) + 800;
    object.position.z = (Math.floor(index / 25)) * 1000 - 2000;
    targets.grid.push(object);

}
function addConeObject(coneVector, index){
    const theta = index * 4 + Math.PI;
    const y = - (index*12) + 450;
    let object = new THREE.Object3D;

    object.position.setFromCylindricalCoords(900, theta, y);

    coneVector.x = object.position.x * 2;
    coneVector.y = object.position.y;
    coneVector.z = object.position.x * 2;

    object.lookAt(coneVector);
    targets.cone.push(object);
}

function transform(target, duration) {

    TWEEN.removeAll();

    for (let i = 0; i < targets.simple.length; i++) {
        let object = targets.simple[i];
        let targetObject = target[i];
        transformObjectPosition(object, targetObject, duration);
        transformObjectRotation(object, targetObject, duration);
    }

    new TWEEN.Tween(this)
        .to({}, duration * 2)
        .onUpdate(render)
        .start();

}

function transformObjectPosition(object, targetObject, duration) {

    new TWEEN.Tween(object.position)
        .to({
            x: targetObject.position.x,
            y: targetObject.position.y,
            z: targetObject.position.z
        }, Math.random() * duration + duration)
        .easing(TWEEN.Easing.Exponential.InOut)
        .start();

}

function transformObjectRotation(object, targetObject, duration) {

    new TWEEN.Tween(object.rotation)
        .to({
            x: targetObject.rotation.x,
            y: targetObject.rotation.y,
            z: targetObject.rotation.z
        }, Math.random() * duration + duration)
        .easing(TWEEN.Easing.Exponential.InOut)
        .start();

}

function onWindowResize() {

    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
    render();

}

function render() {

    renderer.render(scene, camera);

}

function animate() {

    requestAnimationFrame(animate);
    TWEEN.update();
    controls.update();
    composer.render();
}
