<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lot Data</title>

<style>
body {
    margin: 0;
    font-family: "Segoe UI", sans-serif;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Container */
.container {
    width: 95%;
    max-width: 700px;
    text-align: center;
    padding: 20px;
}

/* Title */
h1 {
    color: #2c3e50;
    margin-bottom: 20px;
    animation: fadeIn 1s ease;
}

/* Card */
.card {
    background: #f9f9f9;
    border-radius: 15px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

/* Row */
.row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    gap: 10px;
}

/* Label */
.label {
    font-weight: bold;
    color: #555;
}

/* INPUT STYLE 🔥 */
input, select {
    width: 60%;
    padding: 10px;
    border-radius: 10px;
    border: none;
    outline: none;
    font-size: 14px;
    transition: 0.3s;
}

/* Colored Inputs */
.input-blue {
    background: #e3f2fd;
}
.input-green {
    background: #e8f5e9;
}
.input-orange {
    background: #fff3e0;
}

/* Focus Effect */
input:focus, select:focus {
    transform: scale(1.05);
    box-shadow: 0 0 10px rgba(0,0,0,0.15);
}

/* Highlight */
.highlight {
    background: #4CAF50;
    color: white;
    padding: 10px;
    border-radius: 10px;
    margin-bottom: 10px;
}

/* Danger Card */
.danger {
    background: #ff4d6d;
    color: white;
    padding: 15px;
    border-radius: 12px;
}

/* Animation */
@keyframes fadeIn {
    from {opacity: 0; transform: translateY(20px);}
    to {opacity: 1; transform: translateY(0);}
}

/* Mobile */
@media (max-width: 600px) {
    .row {
        flex-direction: column;
        text-align: center;
    }

    input, select {
        width: 100%;
    }
}
</style>
</head>

<body>

<div class="container">

    <h1>TOKOUF6</h1>

    <div class="card">

        <!-- LOT INPUT -->
        <div class="row">
            <div class="label">LOT NO</div>
            <input class="input-blue" type="text" placeholder="Enter Lot Number">
        </div>

        <!-- ITEM DROPDOWN -->
        <div class="row">
            <div class="label">ITEM NAME</div>
            <select class="input-green">
                <option>Select Item</option>
                <option>CE TMK316AB7106KL-T</option>
                <option>BL-CCG-D5100</option>
                <option>15.0um Type</option>
            </select>
        </div>

        <div class="highlight">
            CE TMK316AB7106KL-T (BL-CCG-D5100 15.0um)
        </div>

        <!-- MACHINE INPUT -->
        <div class="row">
            <div class="label">MACHINE NO</div>
            <input class="input-green" type="number" placeholder="Enter Machine No">
        </div>

        <!-- DIE COATER INPUT -->
        <div class="row">
            <div class="label">DIE COATER NO</div>
            <input class="input-orange" type="number" placeholder="Enter Coater No">
        </div>

        <div class="row">
            <div class="label">SPACER LEFT</div>
            <div class="value">202.00</div>
        </div>

        <div class="row">
            <div class="label">SPACER RIGHT</div>
            <div class="value">201.00</div>
        </div>

        <div class="row">
            <div class="label">TYPE</div>
            <div class="value">0</div>
        </div>
    </div>

    <div class="card danger">
        <div><strong>COVER WEIGHT STD:</strong> 0.450 ± 0.004</div>
        <div><strong>RANGE:</strong> 0.446 – 0.454</div>
        <div><strong>STANDARD DENSITY:</strong> 2.70 – 3.20</div>
        <div><strong>TARGET DENSITY:</strong> 0</div>
        <div><strong>THICKNESS:</strong> 15.0um</div>
        <div><strong>HAIGOU CONDITION:</strong> BL-CCG-D5100</div>
    </div>

</div>

<script>
// Smooth load animation
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".card").forEach((card, index) => {
        card.style.opacity = 0;
        setTimeout(() => {
            card.style.transition = "0.6s";
            card.style.opacity = 1;
        }, index * 200);
    });
});
</script>

</body>
</html>