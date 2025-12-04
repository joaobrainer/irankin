<!DOCTYPE html>
<html>

<head>
        <?php $this->load->view('header'); ?>
</head>

<body>

        <div id="perguntas">
                <div class="container">
                        <?php
                        $lang = $this->session->userdata('lang');

                        switch ($lang) {
                                case 'pt-br':
                                        $title = 'Informe os dados do paciente';
                                        $subtitle = 'Preencha as informações para continuar a avaliação.';
                                        $patientName = 'Nome do paciente';
                                        $respondentName = 'Nome de quem respondeu';
                                        $relationship = 'Parentesco';
                                        $hospitalName = 'Nome do hospital';
                                        $submitLabel = 'Seguir para as perguntas';
                                        break;
                                case 'es-es':
                                        $title = 'Proporcione los datos del paciente';
                                        $subtitle = 'Complete la información para continuar la evaluación.';
                                        $patientName = 'Nombre del paciente';
                                        $respondentName = 'Nombre de quien respondió';
                                        $relationship = 'Parentesco';
                                        $hospitalName = 'Nombre del hospital';
                                        $submitLabel = 'Continuar con las preguntas';
                                        break;
                                case 'ch-sp':
                                        $title = '填写病人资料';
                                        $subtitle = '请填写以下信息以继续评估。';
                                        $patientName = '病人姓名';
                                        $respondentName = '填写者姓名';
                                        $relationship = '与病人关系';
                                        $hospitalName = '医院名称';
                                        $submitLabel = '继续回答问题';
                                        break;
                                case 'ch-tr':
                                        $title = '填寫病人資料';
                                        $subtitle = '請填寫以下資訊以繼續評估。';
                                        $patientName = '病人姓名';
                                        $respondentName = '填寫者姓名';
                                        $relationship = '與病人關係';
                                        $hospitalName = '醫院名稱';
                                        $submitLabel = '繼續回答問題';
                                        break;
                                default:
                                        $title = 'Provide patient information';
                                        $subtitle = 'Fill in the details to continue the assessment.';
                                        $patientName = 'Patient name';
                                        $respondentName = 'Respondent name';
                                        $relationship = 'Relationship';
                                        $hospitalName = 'Hospital name';
                                        $submitLabel = 'Continue to questions';
                                        break;
                        }
                        ?>

                        <?php echo form_open('identificacao/salvar'); ?>
                        <div class="row fadein-animacao">
                                <div class="col-md-12">
                                        <h1><?php echo $title; ?></h1>
                                        <p class="text-muted"><?php echo $subtitle; ?></p>

                                        <?php if ($this->session->flashdata('error')) { ?>
                                                <div class="alert alert-danger" role="alert">
                                                        <?php echo $this->session->flashdata('error'); ?>
                                                </div>
                                        <?php } ?>

                                        <div class="colunm" style="text-align: left;">
                                                <div class="col-md-6 form-group mt-1">
                                                        <label for="nome_paciente"><?php echo $patientName; ?></label>
                                                        <input type="text" class="form-control" id="nome_paciente" name="nome_paciente" required>
                                                </div>

                                                <div class="col-md-6 form-group mt-1">
                                                        <label for="nome_respondente"><?php echo $respondentName; ?></label>
                                                        <input type="text" class="form-control" id="nome_respondente" name="nome_respondente" required>
                                                </div>

                                                <div class="col-md-6 form-group mt-1">
                                                        <label for="parentesco"><?php echo $relationship; ?></label>
                                                        <input type="text" class="form-control" id="parentesco" name="parentesco" required>
                                                </div>

                                                <div class="col-md-6 form-group mt-1">
                                                        <label for="hospital"><?php echo $hospitalName; ?></label>
                                                        <input type="text" class="form-control" id="hospital" name="hospital" required>
                                                </div>
                                        </div>

                                        <div class="form-group text-center mt-5">
                                                <button type="submit" class="btn btnpt"><?php echo $submitLabel; ?> <i class="fas fa-angle-right"></i></button>
                                        </div>
                                </div>
                        </div>
                        <?php echo form_close(); ?>
                </div>
        </div>

</body>
<footer>
        <?php $this->load->view('footer'); ?>
        <?php $this->load->view('footerperguntas'); ?>
</footer>

</html>