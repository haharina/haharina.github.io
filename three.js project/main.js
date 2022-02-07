const table = [
    "Bi", "Bihah ", "30", 1, 1,
    "Ar", "Ariffah", "24", 18, 1,
    "Js", "Jann", "30", 1, 2,
    "Ai", "Aishah", "24", 2, 2,
    "Fr", "Farah", "24", 13, 2,
    "Ad", "Adreena", "24", 14, 2,
    "Fh", "Fahmi", "24", 15, 2,
    "A", "Are-Dyla", "25", 16, 2,
    "Zs", "Zaida", "24", 17, 2,
    "Hy", "Hazila", "26", 18, 2,
    "Ls", "Leyana", "24", 1, 3,
    "S", "Siti", "26", 2, 3,
    "Cr", "Che", "24", 13, 3,
    "Ir", "Izziani", "24", 14, 3,
    "S", "Syafiqa", "26", 15, 3,
    "Q", "Qistina", "24", 16, 3,
    "Sh", "Shada", "26", 17, 3,
    "N", "Nurul", "25", 18, 3,
    "FAm", "Amanina", "23", 1, 4,
    "Fak", "Fakhrul", "24", 2, 4,
    "Hh", "Hyuna", "26", 3, 4,
    "Lok", "Lokman", "24", 4, 4,
    "H", "Hazim", "24", 5, 4,
    "Ta", "T-rah", "24", 6, 4,
    "Sy", "Syahrul", "24", 7, 4,
    "As", "Adnan", "24", 8, 4,
    "ArF", "Armi", "26", 9, 4,
    "Ae", "Aeen", "25", 10, 4,
    "Sh", "Suhailah", "24", 11, 4,
    "FK", "Farizah", "24", 12, 4,
    "Ra", "Ryn", "24", 13, 4,
    "Har", "Harrif", "27", 14, 4,
    "Ha", "Haikal", "24", 15, 4,
    "Ao", "Adib", "26", 16, 4,
    "Sd", "Syed", "23", 17, 4,
    "Fd", "Faridah", "26", 18, 4,
    "Ros", "Rosalinda", "35", 1, 5,
    "Az", "Aziza", "24", 2, 5,
    "Ai", "Aimi", "27", 3, 5,
    "Isni", "Isniyanti", "25", 4, 5,
    "Se", "Syera", "24", 5, 5,
    "Jo", "Johari", "24", 6, 5,
    "Nu", "Nurin", "24", 7, 5,
    "No", "Norain", "24", 8, 5,
    "Fit", "Fitrah", "24", 9, 5,
    "AzA", "Azimah", "24", 10, 5,
    "Safa", "Safariena", "24", 11, 5,
    "Az", "Azman", "24", 12, 5,
    "An", "Awen Nazwen", "24", 13, 5,
    "SyS", "Syed", "26", 14, 5,
    "Asr", "Asraf", "24", 15, 5,
    "Fad", "Fadhil", "21", 16, 5,
    "Sai", "Saiful", "26", 17, 5,
    "EyA", "Eyka", "23", 18, 5,
    "Ez", "Ellham", "23", 1, 6,
    "Z", "Zara", "23", 2, 6,
    "Haq", "Haqiem", "23", 4, 9,
    "IP", "Izham", "24", 5, 9,
    "FF", "Fifie", "23", 6, 9,
    "Zu", "Zubaidah", "22", 7, 9,
    "Ad", "Adlin", "22", 8, 9,
    "HK", "Hanis", "21", 9, 9,
    "N", "Nusrah", "24", 10, 9,
    "Am", "Amirul", "26", 11, 9,
    "E", "E-man", "24", 12, 9,
    "Ra", "Rahim", "53", 13, 9,
    "Kn", "Khayrun", "22", 14, 9,
    "Fe", "Farz", "22", 15, 9,
    "Ikh", "Ikhmal", "25", 16, 9,
    "R", "Rahman", "23", 17, 9,
    "Sa", "Sazlina", "22", 18, 9,
    "Am", "Azrul", "24", 4, 6,
    "Aim", "Aiman", "23", 5, 6,
    "Hz", "Adam", "17", 6, 6,
    "Rh", "Rezza", "37", 7, 6,
    "Am", "Amir", "30", 8, 6,
    "Ns", "Nash", "24", 9, 6,
    "Taki", "Takiyuddin", "25", 10, 6,
    "Fa", "Fikri", "21", 11, 6,
    "Atm", "Atirah", "24", 12, 6,
    "Fie", "Fariesha", "24", 13, 6,
    "Shk", "Shakrul", "24", 14, 6,
    "Faz", "Fazly", "30", 15, 6,
    "Ez", "Ezia", "27", 16, 6,
    "Wa", "Wanie", "21", 17, 6,
    "Ys", "Yasmin", "13", 18, 6,
    "Ay", "Alisya", "37", 1, 7,
    "Sek", "Sekira", "37", 2, 7,
    "Nn", "Nur Najihah", "23", 4, 10,
    "Lo", "Angah Lolo", "23", 5, 10,
    "Eh", "Ershad", "24", 6, 10,
    "Vi", "Vishnu Priya", "25", 7, 10,
    "IK", "Imtiyaz", "23", 8, 10,
    "DD", "DurrahDinie", "23", 9, 10,
    "Shaz", "Shazz Rina", "24", 10, 10,
    "FM", "Fakhrul", "27", 11, 10,
    "Bk", "Berkelium", "40", 12, 10,
    "J", "Jay Johar", "42", 13, 10,
    "Ehh", "Ehh Iskandar", "21", 14, 10,
    "IzS", "IzzatSyamim", "24", 15, 10,
    "K", "Khabil", "29", 16, 10,
    "SS", "Shafiq", "30", 17, 10,
    "NH", "NorHafiza", "26", 18, 10,
    "Qs", "Qila", "23", 4, 7,
    "Syi", "Syima", "21", 5, 7,
    "Ws", "WanShuk", "26", 6, 7,
    "Aty", "Atyqa", "24", 7, 7,
    "Aq", "AtiqahSuhaimi", "23", 8, 7,
    "Har", "Hamizan", "22", 9, 7,
    "An", "Ansar", "23", 10, 7,
    "Irf", "Irfan", "22", 11, 7,
    "Al", "AzwaLiza", "22", 12, 7,
    "F", "Faris", "24", 13, 7,
    "NR", "Najwan", "21", 14, 7,
    "Id", "Idlan", "22", 15, 7,
    "Isk", "Iskandar", "22", 16, 7,
    "Ew", "Ezie", "27", 17, 7,
    "Izy", "Izyan", "22", 18, 7
];

let camera, scene, renderer, controls, composer;
var hblur, vblur;
let targets = { simple: [], table: [], sphere: [], helix: [], grid: [] };

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
    element.style.backgroundColor = 'rgba(' + Math.random() * 127. + ',' + Math.random() * 127 + ',' + Math.random() * 127 + ',' + (Math.random() * 0.5 + 0.25) + ')';
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

    element.addEventListener('click', () => elementClickHandler(i), false);

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

    for (let i = 0, l = targets.simple.length; i < l; i++) {
        addSphereObject(sphereVector, i, l);
        addHelixObject(helixVector, i);
        addGridObject(i);
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