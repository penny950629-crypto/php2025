
<?php include('header.php'); ?>

<header class="masthead bg-primary text-black">
  <h1>學類介紹</h1>
</header>

<body>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">登入</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">姓名</label>
                            <input type="text" class="form-control" id="name" placeholder="姓名">
                        </div>
                        <div class="mb-3">
                            <label for="birth" class="form-label">出生(年/月/日)</label>
                            <input type="text" class="form-control" id="birth" placeholder="出生(年/月/日)">
                        </div>
                        <div class="mb-3">
                            <label for="emailInput" class="form-label">電子郵件</label>
                            <input type="email" class="form-control" id="emailInput" placeholder="輸入你的 Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">密碼</label>
                            <input type="password" class="form-control" id="password" placeholder="輸入密碼">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">登入</button>
                    </form>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
            </div>
        </div>
    </div>
</fieldset>

    <div class="container mt-4">
        <div class="card shadow-lg">
            <div class="card-body">
                <h2><strong>多元能力</strong></h2>
                <table id="abilityTable">
                    <thead>
                        <tr>
                            <th>項目</th>
                            <th>百分比</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <script>
                function generateTable(dataArray, tableId) {
                const tableBody = document.querySelector(`#${tableId} tbody`);
                
                dataArray.forEach(item => {
                    const row = document.createElement("tr");

                    const abilityCell = document.createElement("td");
                    abilityCell.textContent = item.ability;
                    row.appendChild(abilityCell);

                    const percentCell = document.createElement("td");
                    percentCell.textContent = item.percent + "%";
                    row.appendChild(percentCell);

                    const barContainer = document.createElement("div");
                    barContainer.className = "bar-container";

                    const bar = document.createElement("div");
                    bar.className = "bar";
                    bar.style.width = "0%"; // 初始寬度為 0
                    bar.textContent = item.percent + "%";
                    bar.style.backgroundColor = `hsl(${item.percent * 2}, 80%, 50%)`; // 依照百分比變色

                    const tooltip = document.createElement("div");
                    tooltip.className = "tooltip";
                    tooltip.textContent = `${item.ability} - ${item.percent}%`;
                    
                    barContainer.appendChild(tooltip);
                    barContainer.appendChild(bar);

                    barContainer.addEventListener("mouseover", () => {
                        tooltip.style.display = "block";
                    });
                    barContainer.addEventListener("mouseout", () => {
                        tooltip.style.display = "none";
                    });

                    const visualCell = document.createElement("td");
                    visualCell.appendChild(barContainer);
                    row.appendChild(visualCell);

                    tableBody.appendChild(row);

                    // 延遲動畫效果
                    setTimeout(() => {
                        bar.style.width = item.percent + "%";
                    }, 500);
                });
            }
                    const data = [
                        { ability: "程式設計", percent: 11.88 },
                        { ability: "邏輯推理", percent: 9.17 },
                        { ability: "問題解決", percent: 8.44 },
                        { ability: "數理科學", percent: 8.33 },
                        { ability: "語文理解與表達", percent: 7.92 },
                        { ability: "主動學習", percent: 6.98 },
                        { ability: "系統運作", percent: 5.31 },
                        { ability: "敏銳創造", percent: 4.38 },
                        { ability: "資源管理", percent: 4.27 },
                        { ability: "批判思考", percent: 4.06 },
                        { ability: "說服協商", percent: 3.96 },
                        { ability: "記憶詮釋", percent: 3.96 },
                        { ability: "專注力", percent: 3.44 },
                        { ability: "社會覺察與合作", percent: 3.44 },
                        { ability: "快速知覺與總結", percent: 3.23 },
                        { ability: "自省促進", percent: 3.02 },
                        { ability: "運作分析", percent: 2.92 },
                        { ability: "同時多工", percent: 1.67 }
                    ];
                    generateTable(data, "abilityTable");
    
                </script>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card shadow-lg">
            <div class="card-body">
                <h2><strong>性格特質</strong></h2>
                <table id="secondTable">
                    <thead>
                        <tr>
                            <th>項目</th>
                            <th>百分比</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <script>
                    const seconddata = [
                        { ability: "主動積極", percent: 24.27 },
                        { ability: "堅毅負責", percent: 12.71 },
                        { ability: "合作互助", percent: 12.60 },
                        { ability: "探究冒險", percent: 10.63 },
                        { ability: "變通開創", percent: 9.38 },
                        { ability: "深思力行", percent: 9.06 },
                        { ability: "自信肯定", percent: 8.13 },
                        { ability: "樂群敬業", percent: 6.56 },
                        { ability: "親和接納", percent: 3.54 },
                        { ability: "開朗活潑", percent: 3.13 }
                    ];
                    generateTable(seconddata, "secondTable");
                </script>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-qQL5nFihf1u6lftAeG7kFlTrjXN/SwG2i9LC9NxKw0DQq0q3N4pEVL2re6bmKp1U" crossorigin="anonymous"></script>
</body>