<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrivacyFaqsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('privacy_faqs')->delete();
        
        \DB::table('privacy_faqs')->insert(array (
            0 => 
            array (
                'id' => 1,
            'title' => 'O que é a Lei Geral de Proteção de Dados (LGPD)?',
            'title_en' => 'What is General Data Protection Act (LGPD)?',
            'text' => '<p>A LGPD (Lei nº 13.709/2018) é a lei brasileira que regula as atividades de tratamento de dados pessoais, fundamentada principalmente no respeito à sua privacidade. Essa lei estabelece condições específicas para justificar o tratamento de dados pessoais, e nós respeitamos todas elas. Todos os nossos processos, produtos e serviços estão em constante observação para garantir que estejam sempre adequados à LGPD e aos princípios de proteção de dados pessoais por ela estabelecidos.</p>',
            'text_en' => '<p>LGPD (Law 13,709/2018) is the Brazilian law that regulates data processing activities, the guiding tenet of which is respect for privacy. Law 13,709/2018 lays down specific conditions for processing of personal data, and we respect all of them. All of our processes, products and services are constantly monitored to ensure that they stay at all times compliant with the LGPD and related data protection principles.</p>',
                'created_at' => '2021-09-10 17:26:42',
                'updated_at' => '2021-09-21 18:26:33',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'O que são dados pessoais?',
                'title_en' => 'What is personal data?',
                'text' => '<p>Dado pessoal é toda e qualquer informação relacionada a uma pessoa física identificada ou que possa ser identificada, como por exemplo: nome, CPF, RG, data de nascimento, endereço, e-mail, telefone, dados bancários, geolocalização, entre outros.</p>',
            'text_en' => '<p>Personal data means any information relating to an identified or identifiable natural person, such as name, individual taxpayers\' register (CPF), ID, birth date, address, e-mail, phone number, bank account information, geolocation information, among others.</p>',
                'created_at' => '2021-09-10 17:27:34',
                'updated_at' => '2021-09-10 17:27:34',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'O que é tratamento de dados pessoais?',
                'title_en' => 'What is processing of personal data?',
                'text' => '<p>Tratamento é toda operação realizada com dados pessoais, como por exemplo, a coleta, a utilização, o acesso, o processamento, o armazenamento, a eliminação, a transferência, entre outros. Todas as atividades de tratamento realizadas com seus dados pessoais são consideradas tratamento.</p>',
                'text_en' => '<p>Processing means any operation which is performed on personal data, such as collection, use, access, processing, storage, erasure, transfer, among others. All operations performed on your personal data are deemed processing activities.</p>',
                'created_at' => '2021-09-10 17:28:29',
                'updated_at' => '2021-09-10 17:28:29',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Podemos tratar os seus dados pessoais?',
                'title_en' => 'Can we process your personal data?',
                'text' => '<p>Nós trataremos seus dados pessoais apenas para atividades legítimas, relacionadas à prestação de nossos serviços, e sempre de acordo com a LGPD. Sua privacidade é muito importante para nós, e, por isso, sempre protegemos os seus dados pessoais. Todas as nossas atividades que demandam o tratamento de dados pessoais são devidamente justificadas por uma das bases legais previstas na LGPD, conforme informações constantes em nossa Política de Privacidade.</p>',
                'text_en' => '<p>We will process your personal data only for legitimate purposes within the context of our services, and always in compliance with the LGPD. Your privacy is quite important to us and, accordingly, we strive to protect your personal data. All of our activities that require processing of personal data are duly justified by one of the legal bases contemplated in the LGPD, as prescribed by our Privacy Policy.</p>',
                'created_at' => '2021-09-10 17:29:26',
                'updated_at' => '2021-09-21 18:30:34',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Quais tipos de dados pessoais tratamos?',
                'title_en' => 'What types of personal data do we process?',
            'text' => '<p>Apenas os dados pessoais necessários para a prestação dos nossos serviços são tratados por nós. Os tipos de dados pessoais que tratamos podem variar de acordo com o serviço que estamos prestando. Dentre os tipos de dados pessoais que tratamos, estão: (i) dados de identificação; (ii) dados de contato; (iii) informações bancárias; (iv) informações de preferência de notícias e eventos; (v) informações de dispositivo; (vi) informações de uso e histórico de navegação. Para informações mais detalhadas com relação aos dados pessoais tratados, confira a nossa Política de Privacidade.&nbsp;Acessar a Política de Privacidade</p>',
            'text_en' => '<p>Only personal data needed to provide our services are processed by us. The types of personal data we process may vary according to the service we are providing. We process the following types of personal data: (i) identification data; (ii) contact data; (iii) bank account information; (iv) information on news and event preferences; (v) device information; (vi) web browsing history. For further information on the personal data we process, please see our Privacy Policy.&nbsp;Access the Privacy Policy</p>',
                'created_at' => '2021-09-10 17:30:17',
                'updated_at' => '2021-09-10 17:30:17',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Como protegemos os seus dados pessoais?',
                'title_en' => 'How do we protect your personal data?',
                'text' => '<p>Nós nos importamos muito com a sua segurança e privacidade. Por essa razão, implementamos medidas técnicas, administrativas e organizacionais para proteger os seus dados pessoais, que incluem salvaguardas, como por exemplo, controles rígidos de acesso aos sistemas de TI, treinamento de todos os nossos integrantes, entre outros. Possuímos, também, a Certificação ISO 27001, relacionada a requisitos técnicos de segurança da informação.</p>',
                'text_en' => '<p>We value your security and privacy. In this context, we have in place technical, administrative and organizational measures to protect your personal data, including safeguards, such as strict controls for access to IT systems, training of all our staff and personnel, among others. We have received the ISO 27001 Certification, which demonstrates that we fulfill information security management standards.</p>',
                'created_at' => '2021-09-10 17:31:31',
                'updated_at' => '2021-09-10 17:31:31',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Com quem compartilhamos os seus dados pessoais?',
                'title_en' => 'Who do we share your personal data with?',
                'text' => '<p>Nós compartilhamos os seus dados pessoais apenas nos casos em que o compartilhamento é imprescindível para a execução dos serviços prestados por nós, conforme disposto na Política de Privacidade. Todos os terceiros com quem compartilhamos dados pessoais estão sujeitos a requisitos mínimos de segurança, relacionados a medidas técnicas, administrativas e organizacionais para garantir o tratamento adequado e seguro de seus dados pessoais.&nbsp;Acessar a Política de Privacidade</p>',
                'text_en' => '<p>We share your personal data only to the extent necessary to perform our services, as provided in our Privacy Policy. All third parties with whom we share personal data must satisfy minimum security requirements in terms of technical, administrative and organizational measures to ensure appropriate and secure processing of your personal data.&nbsp;Access the Privacy Policy</p>',
                'created_at' => '2021-09-10 17:32:27',
                'updated_at' => '2021-09-10 17:32:27',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Quais são os seus direitos?',
                'title_en' => 'What are your rights?',
            'text' => '<p>A LGPD garante diversos direitos aos titulares de dados pessoais, e nós respeitamos todos eles. Os nossos processos são desenvolvidos e elaborados de forma a permitir, sempre que cabível, o atendimento dos seus direitos. De acordo com a LGPD, você pode solicitar: a) A confirmação da existência de tratamento que envolva seus dados pessoais; b) O acesso aos seus dados pessoais tratados por nós; c) A correção de seus dados pessoais que estejam incompletos, inexatos ou desatualizados; d) A anonimização, bloqueio ou eliminação de dados pessoais que sejam desnecessários, excessivos ou tratados em desconformidade com a LGPD; e) A portabilidade dos seus dados pessoais a outro fornecedor de serviço ou produto, de acordo com a regulamentação da autoridade nacional, observados os segredos comercial e industrial; f) A eliminação dos dados pessoais tratados com o seu consentimento; g) A revisão de decisões e tratamentos automatizados; h) Informação sobre as entidades com as quais nós compartilhamos os seus dados pessoais; i) Informação sobre a possibilidade de não fornecer consentimento e sobre as consequências da negativa; e j) A revogação do seu consentimento. É importante lembrar que o atendimento desses direitos será objeto de análise acerca da viabilidade e cabimento do pedido que você realizar. Há casos em que não será possível e nem permitido pela própria lei atender a todos os direitos.</p>',
        'text_en' => '<p>Under the LGPD, data subjects are granted several rights regarding their personal data, which we vigorously endorse. Our processes are designed and developed to allow you to exercise your rights, to the fullest extent possible. According to the LGPD, you can request: a) confirmation that your personal data were processed; b) access to your personal data processed by us; c) rectification of incomplete, inaccurate or outdated personal data relating to you; d) anonymization, blocking or erasure of personal data deemed unnecessary, excessive, or processed in breach of the LGPD; e) portability of your personal data to another service or product supplier, in accordance with the regulation of the national data protection authority, with due regard for trade and industrial secrets; f) erasure of personal data processed on the basis of your consent; g) review of automated processing and decision-making; h) information about the entities with which we share your personal data; i) information about the possibility of refusing consent and the consequences of refusal; and j) withdrawal of your consent. We remind you that fulfillment of these rights will be subject to an analysis as to the feasibility and applicability of your request. In some cases, we will not be able or permitted by law to fulfill all your rights.</p>',
        'created_at' => '2021-09-10 17:33:21',
        'updated_at' => '2021-09-10 17:33:21',
        'deleted_at' => NULL,
    ),
    8 => 
    array (
        'id' => 9,
        'title' => 'Como exercer os seus direitos?',
        'title_en' => 'How can your rights be exercised?',
        'text' => '<p>Para realizar uma solicitação referente aos direitos elencados acima, você deverá enviar um e-mail para privacidade@pn.com.br. Nós responderemos a sua solicitação assim que possível. Caso não seja possível atender à sua solicitação, informaremos os motivos.</p>',
        'text_en' => '<p>To submit a request with regard to the foregoing rights, please send an e-mail to privacidade@pn.com.br. We will respond to your request as soon as possible. If we are unable to meet your request, we will inform you the relevant reasons.</p>',
        'created_at' => '2021-09-10 17:34:21',
        'updated_at' => '2021-09-10 17:34:21',
        'deleted_at' => NULL,
    ),
    9 => 
    array (
        'id' => 10,
        'title' => 'Como entrar em contato conosco?',
        'title_en' => 'How can you contact us?',
        'text' => '<p>Se você tiver dúvidas, reclamações, sugestões ou comentários em relação às atividades de tratamento de dados pessoais realizadas por Pinheiro Neto Advogados, entre em contato conosco pelo seguinte e-mail privacidade@pn.com.br.</p>',
        'text_en' => '<p>If you have any questions, complaints, suggestions or comments regarding data processing activities carried out by Pinheiro Neto Advogados, please contact us through e-mail privacidade@pn.com.br.</p>',
        'created_at' => '2021-09-10 17:35:20',
        'updated_at' => '2021-09-10 17:35:20',
        'deleted_at' => NULL,
    ),
));
        
        
    }
}