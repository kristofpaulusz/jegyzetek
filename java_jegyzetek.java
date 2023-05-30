// MVC LISTENER hozzaadasa
// controller belso osztaly
public class Controller {
    private static View view;
    private static Model model;
    public Controller() {
        view = new View();
        model = new Model();
        view.addThisListener(new KepListener()) // ezt a methotod meg kell csinálni
    }
    public 
    public static class KepListener implements ActionListener {

        @Override
        public void actionPerformed(ActionEvent e) {
            view.csinaljValamit(model.getAdat());
        }
    }
}
// Kep beolvasas
public void showImg() {
        try {
            BufferedImage bi = ImageIO.read(new File("csiga.png"));
            JOptionPane.showMessageDialog(this, "Kép Betöltve", "KépBetöltés", JOptionPane.INFORMATION_MESSAGE, new ImageIcon(bi));
        } catch (IOException ex) {
            Logger.getLogger(JegyzetForm.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
// File Exploreres Mentes
private void saveBtActionPerformed(java.awt.event.ActionEvent evt) {                                       
        JFileChooser jfcs = new JFileChooser();
        int valasztas = jfcs.showSaveDialog(this);
        if (valasztas == JFileChooser.APPROVE_OPTION ) {
            try {
                Files.createFile(jfcs.getSelectedFile().toPath());
                BufferedWriter myWriter = Files.newBufferedWriter(jfcs.getSelectedFile().toPath());
                myWriter.write("sda");
                myWriter.close();
            } catch (IOException ex) {
                Logger.getLogger(GuiNezet.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }        
