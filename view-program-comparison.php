<div class="comp">
<div class="container mt-4">
    <h1>Program Stats Comparison</h1>
    
    <!-- Dropdowns for selecting programs -->
    <div class="row mb-4">
        <div class="col-md-6">
            <label for="program1" class="form-label">Select Program 1</label>
            <select id="program1" class="form-select">
                <option value="" disabled selected>Select a Program</option>
                <?php
                foreach ($programs as $program) {
                    echo "<option value='{$program['ProgramName']}'>{$program['ProgramName']}</option>";
                }
                ?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="program2" class="form-label">Select Program 2</label>
            <select id="program2" class="form-select">
                <option value="" disabled selected>Select a Program</option>
                <?php
                foreach ($programs as $program) {
                    echo "<option value='{$program['ProgramName']}'>{$program['ProgramName']}</option>";
                }
                ?>
            </select>
        </div>
    </div>

    <!-- Radar chart for program stats comparison -->
    <canvas id="programStatsChart"></canvas>
</div>
</div>

<style>
    #programStatsChart {
        max-width: 1000px;
        max-height: 700px;
        margin: 0 auto;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Convert PHP program data to JavaScript
    const programData = <?php echo json_encode($programs); ?>;

    // Fetch raw program stats
    function getProgramStats(programName) {
        const program = programData.find(p => p.ProgramName === programName);
        return program ? [program.DaysPerWeek, program.DifficultyLevel, program.Intensity] : [0, 0, 0];
    }

    // Initialize radar chart
    const ctx = document.getElementById('programStatsChart').getContext('2d');
    const radarChart = new Chart(ctx, {
        type: 'radar',
        data: {
            labels: ['Days Per Week', 'Difficulty Level', 'Intensity'],
            datasets: []
        },
        options: {
            responsive: true,
            maintainAspectRatio: true,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        boxWidth: 20,
                    }
                },
                title: {
                    display: true,
                    text: 'Program Comparison',
                    font: {
                        size: 16
                    }
                }
            },
            scales: {
                r: {
                    min: 0,
                    ticks: {
                        stepSize: 1 // Adjust as per your data range
                    },
                    pointLabels: {
                        font: {
                            size: 14
                        }
                    }
                }
            }
        }
    });

    // Update chart on program selection
    function updateChart(program1, program2) {
        radarChart.data.datasets = [];
        if (program1) {
            radarChart.data.datasets.push({
                label: program1,
                data: getProgramStats(program1),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            });
        }
        if (program2) {
            radarChart.data.datasets.push({
                label: program2,
                data: getProgramStats(program2),
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            });
        }
        radarChart.update();
    }

    // Event listeners for dropdowns
    document.getElementById('program1').addEventListener('change', (e) => {
        const program1 = e.target.value;
        const program2 = document.getElementById('program2').value;
        updateChart(program1, program2);
    });

    document.getElementById('program2').addEventListener('change', (e) => {
        const program1 = document.getElementById('program1').value;
        const program2 = e.target.value;
        updateChart(program1, program2);
    });
</script>
