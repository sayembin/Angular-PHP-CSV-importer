<?php
namespace controller;
require_once(__DIR__.'/../bootstrap.php');


/**
 *
 * Class TodoController
 * @author Md.Sayem bin hasan <sayemdoc@gmail.com>
 */
class controller
{
    /**
     * @var entityManager
     */
    private $entityManager;

    /**
     * constructor
     */
    public function __construct()
    {

        $this->entityManager = getEntityManager();
        $settings = \Config\config::getConfig();
        $product = new  \Models\Entity\Product();
        $product->setDate();
        $product->setName('CSV');
        $feature  = new \Models\Entity\Feature();
        $feature->setName('Import');
        $feature->setProduct($product);

        $productRepo = getEntityManager()->getRepository('Models\Entity\Product');
        /* @var $productRepo \Doctrine\ORM\EntityRepository */
        //$product = $productRepo->find(2);
        $products =  $productRepo->findLatest(2);
        foreach($products as $product){
            /* @var $product \Models\Entity\Product */
            echo $product->getName().'<br>';
            echo date_format($product->getDate(),"Y/m/d H:i:s").'<br>';
        }

        //$this->entityManager->persist($product);
        //$this->entityManager->persist($feature);
        $this->entityManager->flush();

        //$task = $_GET['task'];
        
      //  header("Location: " . $settings['base_url'] . "/view", false);

    }

    /**
     * insert the label data into the form
     *
     */
    public function insertFormLabel()
    {

        $formfield = new FormFields();
        $formfield->setName('name');
        $formfield->setLabel('name');
        $formfield1 = new FormFields();
        $formfield1->setName('surname');
        $formfield1->setLabel('surname');
        $formfield2 = new FormFields();
        $formfield2->setName('email');
        $formfield2->setLabel('email');
        $formfield3 = new FormFields();
        $formfield3->setName('telephone');
        $formfield3->setLabel('telephone');

        $this->entityManage->persist($formfield);
        $this->entityManage->persist($formfield1);
        $this->entityManage->persist($formfield2);
        $this->entityManage->persist($formfield3);
        $this->entityManage->flush();

    }

    /**
     * this
     * @return JSON Object
     */
    public function getFormfieldData()
    {
        $formRepo = getEntityManager()->getRepository('Models\Entity\FormFields');
        $formfields = $formRepo->findAll();
        $data = array();
        foreach ($formfields as $field) {

            $data[] = array(
                'name' => $field->getName(),
                'label' => $field->getLabel(),
            );
        }
        echo json_encode($data);
    }

    /**
     * this method insert the data of form in database
     * @return void
     */
    public function insertFormSubmit()
    {
        $post = array(
            'name' => ($_POST['name']),
            'surname' => ($_POST['surname']),
            'surname' => ($_POST['email']),
            'telephone' => ($_POST['telephone'])
        );
        if (!empty($post)) {
            $formsubmit = new FormSubmit();
            $formsubmit->setDate();
            $this->entityManager->persist($formsubmit);
            $submitdata = new FormSubmitData();
            $submitdata->setName(($_POST['name']));
            $submitdata->setValue(base64_encode(serialize($post)));
            $this->entityManager->persist($submitdata);
            $this->entityManager->flush();
            echo 'ok';
        }
    }

    public function multiplyNumber($num){

        return $num*$num;

    }

}

$controller = new controller();