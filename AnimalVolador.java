package AnimalesZologicos;

public class AnimalVolador extends Animal {
	
	private String color_pluma;
	private int tama�o;
	private String migrante;
	
	//CONSTRUCTOR
	public AnimalVolador() {
		// TODO Auto-generated constructor stub
	}
	public AnimalVolador(String _tipo,String _Nombre, String _Pais, String _Fecha_ingreso,String _color_pluma , int _tama�o, String _migrante) {
		super(_tipo,_Nombre, _Pais, _Fecha_ingreso);
		this.color_pluma = _color_pluma;
		this.tama�o = _tama�o;
		this.migrante = _migrante;
		// TODO Auto-generated constructor stub
	}
	//SETTERS GETTERS
	public String getColor_pluma() {
		return color_pluma;
	}
	public void setColor_pluma(String color_pluma) {
		this.color_pluma = color_pluma;
	}
	public int getTama�o() {
		return tama�o;
	}
	public void setTama�o(int tama�o) {
		this.tama�o = tama�o;
	}
	public String getMigrante() {
		return migrante;
	}
	public void setMigrante(String migrante) {
		this.migrante = migrante;
	}
	//TOstring
	@Override
	public String toString() {
		return "AnimalVolador [color_pluma=" + color_pluma + ", tama�o=" + tama�o + ", migrante=" + migrante
				+ ", getNombre()=" + getNombre() + ", getPais()=" + getPais() + ", getFecha_ingreso()="
				+ getFecha_ingreso() +  "]";
	}
	
	

}