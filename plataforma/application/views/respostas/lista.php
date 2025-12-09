<!DOCTYPE html>
<html>
<head>
        <?php $this->load->view('header'); ?>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>
<body class="bg-light">
        <div class="container py-5">
                <div class="row justify-content-center">
                        <div class="col-12">
                                <div class="card shadow-sm">
                                        <div class="card-body">
                                                <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-4">
                                                        <div>
                                                                <h1 class="h3 mb-1">Responses dashboard</h1>
                                                                <p class="text-muted mb-0">Review all submitted questionnaires in one place.</p>
                                                        </div>
                                                        <span class="badge bg-primary fs-6">Hidden route</span>
                                                </div>
                                                <div class="table-responsive">
                                                        <table id="responsesTable" class="table table-striped table-hover align-middle" style="width:100%">
                                                                <thead class="table-dark">
                                                                        <tr>
                                                                                <th scope="col">ID</th>
                                                                                <th scope="col">Language</th>
                                                                                <th scope="col">Score</th>
                                                                                <th scope="col">Identification</th>
                                                                                <th scope="col">Responses</th>
                                                                                <th scope="col">Submitted at</th>
                                                                        </tr>
                                                                </thead>
                                                                <tbody>
                                                                        <?php foreach ($submissions as $submission): ?>
                                                                                <?php
                                                                                        $respostas = json_decode($submission['respostas'], true);

                                                                                        $identificationLabels = array(
                                                                                                'Patient name' => 'Patient name',
                                                                                                'Respondent name' => 'Respondent name',
                                                                                                'Respondent relationship' => 'Relationship',
                                                                                                'Hospital name' => 'Hospital',
                                                                                        );

                                                                                        $identification = array(
                                                                                                'Patient name' => null,
                                                                                                'Respondent name' => null,
                                                                                                'Respondent relationship' => null,
                                                                                                'Hospital name' => null,
                                                                                        );

                                                                                        $questionResponses = array();

                                                                                        if (is_array($respostas) && count($respostas) > 0) {
                                                                                                foreach ($respostas as $resposta) {
                                                                                                        $pergunta = isset($resposta['pergunta']) ? $resposta['pergunta'] : '';

                                                                                                        if (array_key_exists($pergunta, $identification)) {
                                                                                                                $identification[$pergunta] = isset($resposta['resposta']) ? $resposta['resposta'] : null;
                                                                                                                continue;
                                                                                                        }

                                                                                                        $questionResponses[] = $resposta;
                                                                                                }
                                                                                        }

                                                                                        $hasIdentification = array_filter($identification, function ($value) {
                                                                                                return $value !== null && $value !== '';
                                                                                        });
                                                                                ?>
                                                                                <tr>
                                                                                        <td><?= $submission['id']; ?></td>
                                                                                        <td class="text-uppercase fw-bold"><?= $submission['lang']; ?></td>
                                                                                        <td><span class="badge bg-info text-dark"><?= $submission['pontuacao']; ?></span></td>
                                                                                        <td class="small">
                                                                                                <?php if (count($hasIdentification) > 0): ?>
                                                                                                        <ul class="mb-0 ps-3">
                                                                                                                <?php foreach ($identification as $label => $value): ?>
                                                                                                                        <?php if ($value !== null && $value !== ''): ?>
                                                                                                                                <li><span class="fw-semibold"><?= $identificationLabels[$label]; ?>:</span> <span class="text-secondary"><?= $value; ?></span></li>
                                                                                                                        <?php endif; ?>
                                                                                                                <?php endforeach; ?>
                                                                                                        </ul>
                                                                                                <?php else: ?>
                                                                                                        <span class="text-muted">No identification data</span>
                                                                                                <?php endif; ?>
                                                                                        </td>
                                                                                        <td class="small">
                                                                                                <?php if (count($questionResponses) > 0): ?>
                                                                                                        <ul class="mb-0 ps-3">
                                                                                                                <?php foreach ($questionResponses as $resposta): ?>
                                                                                                                        <?php
$answer = isset($resposta['resposta']) && is_array($resposta['resposta'])
        ? implode(', ', $resposta['resposta'])
        : (isset($resposta['resposta']) ? $resposta['resposta'] : '');
                                                                                                                        ?>
                                                                                                                        <li><span class="fw-semibold"><?= isset($resposta['pergunta']) ? $resposta['pergunta'] : 'Question'; ?>:</span> <span class="text-secondary"><?= $answer; ?></span></li>
                                                                                                                <?php endforeach; ?>
                                                                                                        </ul>
                                                                                                <?php else: ?>
                                                                                                        <span class="text-muted">No responses recorded</span>
                                                                                                <?php endif; ?>
                                                                                        </td>
                                                                                        <td><?= date('M d, Y H:i', strtotime($submission['created_at'])); ?></td>
                                                                                </tr>
                                                                        <?php endforeach; ?>
                                                                </tbody>
                                                        </table>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
        <script>
                $(function() {
                        $('#responsesTable').DataTable({
                                pageLength: 10,
                                order: [[5, 'desc']],
                                columnDefs: [
                                        { targets: [3, 4], orderable: false }
                                ]
                        });
                });
        </script>
</body>
<footer>
        <?php $this->load->view('footer'); ?>
</footer>
</html>
